// ==UserScript==
// @name         Mousquetaire
// @namespace    http://tampermonkey.net/
// @version      0.1
// @require      https://code.jquery.com/jquery-3.4.1.min.js
// @require      https://cdn.jsdelivr.net/npm/file-saver@2.0.2/dist/FileSaver.min.js
// @description  try to take over the world!
// @author       You
// @match        https://gainde.douanes.sn/gainde/*
// @grant        none
// ==/UserScript==
var wait = ms => new Promise((r, j) => setTimeout(r, ms));

/**
 * This function clicks on a specified element on a table
 * @param {Node} table 
 * @param {Number} position 
 * @param {Number} start 
 */
function clickTable(table, position, start) {
    let cells = table.rows.item(position).cells
    cells.item(start).children[0].click()
}

/**
 * This function save the datas in a file and downloads it
 * @param {String} content 
 */
function saveFile(content) {
    let date = new Date()
    let fileName = `${date.toLocaleDateString().split('/').join('')}${date.toLocaleTimeString().split(':').join('')}`
    var blob = new Blob([content], { type: "text/plain;charset=utf-8" });
    saveAs(blob, fileName);
}

/**
 * This function extract datas in a BL page
 */
function extractBLDetails() {
    let blDetails = {}
    let conteneurs = []
    let conteneur = []
        //Getting input values
    blDetails.lieu_embarq = document.getElementById('form_enregistrementManifesteForm_numListManifCodeLieuEmbarquementOB').value
    blDetails.pays_dest = document.getElementById('form_enregistrementManifesteForm_numListManifCodePaysDestinationOB').value
    blDetails.nom_exp = document.getElementById('form_enregistrementManifesteForm_numManifNomExpediteurOB').value
    blDetails.num_bl = document.getElementById('form_enregistrementManifesteForm_numManifNumTitreTransportArticle').value
    blDetails.destinaire = document.getElementById('form_numManifNomDestinataire').value
    blDetails.commodity = document.getElementById('TNUM_manifDesigCommerciale_OB').value
    blDetails.destinaire = document.getElementById('form_numManifNomDestinataire').value
        //Extracting datas inside the containers table
    var myTab = document.querySelector("table.FORM2");
    for (let i = 1; i < myTab.rows.length; i++) {
        var objCells = myTab.rows.item(i).cells;
        conteneur = []
        for (let j = 0; j < objCells.length; j++) {
            conteneur.push(objCells.item(j).innerHTML);
        }
        conteneurs.push(conteneur)
    }
    blDetails.conteneurs = conteneurs
        //Setting the corresponding boat
    let bateaux = JSON.parse(localStorage.getItem('bateaux'))
    let actuel = parseInt(localStorage.getItem('bateau_actuel'))
    blDetails.bateau = bateaux[actuel]

    return blDetails
}

/**
 * This function modifies a request to get all datas based on the records
 * @param {String} url 
 * @param {Number} records 
 * @param {String} type 
 */
function getAllDatas(url, records, type) {
    //Modifying URL
    let x = url.split('&page')
    let y = x[0].split('&rows')
    let newUrl = y[0] + `&rows=${records}&page=1&sidx=&sord=asc`
        //Sending request
    let req = new XMLHttpRequest()
    req.open('GET', newUrl, true, '', '', false, type)
    return req.send()
}

/**
 * This function extract specified datas returned from a request
 * @param {Object} tree 
 * @param {String} jsonResult 
 */
function extractDatas(tree, jsonResult) {
    let returned = {}
    let result = JSON.parse(jsonResult)
    Object.keys(tree).forEach((key) => {
        returned[`${key}`] = result[`${key}`]
    });
    return returned;
}

/**
 * This function extract number of records to send a request with full datas
 * @param {String} url 
 * @param {Object} request 
 */
function handleDatasFromUrl(url, request) {
    //Getting the first part of the URL
    let splitted = url.split('?')
    let datas = {}
        //Sending request based on the URL
    switch (splitted[0]) {
        case '/gainde/manifesteGrid.action':
            datas = extractDatas({
                records: 0
            }, request.responseText)
            getAllDatas(url, datas.records, "bateaux")
            break;
        case '/gainde/listEnregArtEmbarquementGridAction.action':
            datas = extractDatas({
                records: 0
            }, request.responseText)
            getAllDatas(url, datas.records, "bls")
            break;
        case '/gainde/listArtEnregGridAction.action':
            datas = extractDatas({
                records: 0
            }, request.responseText)
            getAllDatas(url, datas.records, "bls")
            break;
        default:
            break;
    }
}

/**
 * This function creates localStorage entries
 * @param {String} entryName 
 * @param {String} countName 
 * @param {Object} liste 
 * @param {String} property 
 * @param {Number} type 
 */
function storeDatas(entryName, countName, liste, property, type) {
    let elements = []
    liste[`${property}`].forEach((value) => {
        if (type == 1) {
            let element = extractDatas({
                manifMoyenTransport: '',
                manifDateArrivee: '',
                pk: '',
            }, JSON.stringify(value))
            element.ports_link = "https://gainde.douanes.sn/gainde/consulterManifesteEnregActionURL.action?pk=" + element.pk + "&pageContext=consulterManifesteEnreg"
        } else if (type == 2) {
            let element = extractDatas({
                codeLieu: '',
                libelleLieu: '',
            }, JSON.stringify(value))
            element.bls_link = "https://gainde.douanes.sn/gainde/consulterListArticleByLieuEmbarqAction?pageContext=consulterListArticleLieuxEmbarqEnreg&cleListLieux=" + element.codeLieu
        } else {
            let element = extractDatas({
                manifDesignationCom: '',
                editCell: '',
            }, JSON.stringify(value))
            element.bl_details_link = "https://gainde.douanes.sn/gainde/consulterArticleEnregActionURL?pageContext=consulterArticleEnreg&pk=" + element.editCell
            element.push(bl)
        }
        elements.push(element)
    })
    localStorage.setItem(entryName, JSON.stringify(elements))
    localStorage.setItem(countName, elements.length)
}

/**
 * Changing default behaviour of OPEN method on XMLHttpRequest
 */
(function(open) {
    XMLHttpRequest.prototype.open = function(method, url, async, user, pass, param = true, type) {
        this.addEventListener("load", function() {
            if (param) {
                handleDatasFromUrl(url, this)
            } else {
                if (type == "bateaux") {
                    let liste = extractDatas({
                        listeManifeste: [],
                        pk: ''
                    }, this.responseText)
                    storeDatas('bateaux', 'count_bateaux', liste, 'listeManifeste', 1)
                } else if (type == "ports") {
                    let liste = extractDatas({
                        listeLieuEmbarqGrid: [],
                    }, this.responseText)
                    storeDatas('ports', 'count_ports', liste, 'listeLieuEmbarqGrid', 2)
                } else {
                    let liste = extractDatas({
                        listeArtParLieuEmbarqGrid: [],
                    }, this.responseText)
                    storeDatas('bls', 'count_bls', liste, 'listeArtParLieuEmbarqGrid', 3)
                }

            }
        }, false);
        open.call(this, method, url, async, user, pass);
    };
})(XMLHttpRequest.prototype.open);


$(document).ready(async() => {
    var filesaver = document.createElement('script');
    filesaver.setAttribute('src', 'https://cdn.jsdelivr.net/npm/file-saver@2.0.2/dist/FileSaver.min.js');
    document.head.appendChild(filesaver);
    if (window.location.href == 'https://gainde.douanes.sn/gainde/rechercherManifesteEnregistreAutre?pageContext=rechercheManifeste') {
        setTimeout(function() {
            if (localStorage.getItem('bateau_actuel')) {
                if (parseInt(localStorage.getItem('bateau_actuel')) + 1 != parseInt(localStorage.getItem('count_bateaux'))) {
                    if (localStorage.getItem('tab_bateau_pos')) {
                        let pos = parseInt(localStorage.getItem('tab_bateau_pos'))
                        if (localStorage.getItem('bl_actuel') || localStorage.getItem('port_actuel')) {
                            clickTable(document.getElementById('gridtable'), pos, 1)
                        } else {
                            pos++
                            let actuel = parseInt(localStorage.getItem('bateau_actuel'))
                            actuel++
                            localStorage.setItem('tab_bateau_pos', pos)
                            localStorage.setItem('bateau_actuel', actuel)
                            clickTable(document.getElementById('gridtable'), pos, 1)
                        }
                    } else {
                        let bateau_actuel = parseInt(localStorage.getItem('bateau_actuel'))
                        let boat = JSON.parse(localStorage.getItem('bateaux'))
                        if (localStorage.getItem('bl_actuel') || localStorage.getItem('port_actuel')) {
                            window.location.href = boat[bateau_actuel].ports_link
                        } else {
                            bateau_actuel++
                            localStorage.setItem('bateau_actuel', bateau_actuel)
                            window.location.href = boat[bateau_actuel].ports_link
                        }
                    }
                } else {
                    saveFile(localStorage.getItem('datas'))
                    localStorage.clear()
                }
            } else {
                if (parseInt(document.getElementById('sp_1_gridtable_pager').innerText) > 1) {
                    localStorage.setItem('bateau_actuel', 0)
                    document.getElementById('next_gridtable_pager').click()
                    let await_next = wait(2000)
                    await_next.then(() => {
                        document.getElementById('prev_gridtable_pager').click()
                        let await_prev = wait(2000)
                        await_prev.then(() => {
                            clickTable(document.getElementById('gridtable'), 1, 1)
                        })
                    })
                } else if (parseInt(document.getElementById('sp_1_gridtable_pager').innerText) == 1) {
                    localStorage.setItem('bateau_actuel', 0)
                    localStorage.setItem('tab_bateau_pos', 1)
                    localStorage.setItem('count_bateaux', tableDatas.length)
                    clickTable(document.getElementById('gridtable'), 1, 1)
                }
            }
        }, 25000);
    }
    if (window.location.href == "https://gainde.douanes.sn/gainde/consulterManifesteEnregAction.action?pageContext=consulterManifesteEnreg" || window.location.href == 'https://gainde.douanes.sn/gainde/consulterManifesteEnregAction?pageContext=consulterManifesteEnreg') {
        setTimeout(function() {
            if (localStorage.getItem('port_actuel')) {
                if (parseInt(localStorage.getItem('port_actuel')) + 1 != parseInt(localStorage.getItem('count_ports'))) {
                    if (localStorage.getItem('tab_port_pos')) {
                        let pos = parseInt(localStorage.getItem('tab_port_pos'))
                        if (localStorage.getItem('bl_actuel')) {
                            clickTable(document.getElementById('gridtable'), pos, 0)
                        } else {
                            pos++
                            let actuel = parseInt(localStorage.getItem('port_actuel'))
                            actuel++
                            localStorage.setItem('tab_port_pos', pos)
                            localStorage.setItem('port_actuel', actuel)
                            clickTable(document.getElementById('gridtable'), pos, 0)
                        }
                    } else {
                        let port = JSON.parse(localStorage.getItem('ports'))
                        let port_actuel = parseInt(localStorage.getItem('port_actuel'))
                        if (localStorage.getItem('bl_actuel')) {
                            window.location.href = port[port_actuel].bls_link
                        } else {
                            port_actuel++
                            localStorage.setItem('port_actuel', port_actuel)
                            window.location.href = port[port_actuel].bls_link
                        }
                    }
                } else {
                    localStorage.removeItem('port_actuel')
                    localStorage.removeItem('ports')
                    localStorage.removeItem('count_ports')
                    localStorage.removeItem('tab_port_pos')
                    document.getElementById('consulterManifesteEnregAction_button_retour').click()
                }
            } else {
                if (parseInt(document.getElementById('sp_1_gridtable_pager').innerText) > 1) {
                    localStorage.setItem('port_actuel', 0)
                    document.getElementById('next_gridtable_pager').click()
                    let await_next = wait(2000)
                    await_next.then(() => {
                        document.getElementById('prev_gridtable_pager').click()
                        let await_prev = wait(2000)
                        await_prev.then(() => {
                            clickTable(document.getElementById('gridtable'), 1, 0)
                        })
                    })
                } else if (parseInt(document.getElementById('sp_1_gridtable_pager').innerText) == 1) {
                    localStorage.setItem('port_actuel', 0)
                    localStorage.setItem('tab_port_pos', 1)
                    localStorage.setItem('count_ports', table.rows.length - 1)
                    clickTable(table, 1, 0)
                } else {
                    document.getElementById('consulterManifesteEnregAction_button_retour').click()
                }
            }
        }, 25000);
    }
    if (window.location.href.slice(0, window.location.href.length - 6) == "https://gainde.douanes.sn/gainde/consulterListArticleByLieuEmbarqAction?pageContext=consulterListArticleLieuxEmbarqEnreg&cleListLieux") {
        setTimeout(function() {
            if (localStorage.getItem('bl_actuel')) {
                if (parseInt(localStorage.getItem('bl_actuel')) + 1 != parseInt(localStorage.getItem('count_bls'))) {
                    if (localStorage.getItem('tab_bl_pos')) {
                        let pos = parseInt(localStorage.getItem('tab_bl_pos'))
                        pos++
                        let actuel = parseInt(localStorage.getItem('bl_actuel'))
                        actuel++
                        localStorage.setItem('tab_bl_pos', pos)
                        localStorage.setItem('bl_actuel', actuel)
                        clickTable(document.getElementById('gridtable'), pos, 0)
                    } else {
                        let bl = JSON.parse(localStorage.getItem('bls'))
                        let bl_actuel = parseInt(localStorage.getItem('bl_actuel'))
                        bl_actuel++
                        localStorage.setItem('bl_actuel', bl_actuel)
                        window.location.href = bl[bl_actuel].bl_details_link
                    }
                } else {
                    localStorage.removeItem('bl_actuel')
                    localStorage.removeItem('bls')
                    localStorage.removeItem('count_bls')
                    localStorage.removeItem('tab_bl_pos')
                    document.getElementById('consulterListArticleByLieuEmbarqAction_button_retour').click()
                }
            } else {
                if (parseInt(document.getElementById('sp_1_gridtable_pager').innerText) > 1) {
                    localStorage.setItem('bl_actuel', 0)
                    document.getElementById('next_gridtable_pager').click()
                    let await_next = wait(2000)
                    await_next.then(() => {
                        document.getElementById('prev_gridtable_pager').click()
                        let await_prev = wait(2000)
                        await_prev.then(() => {
                            clickTable(document.getElementById('gridtable'), 1, 0)
                        })
                    })
                } else if (parseInt(document.getElementById('sp_1_gridtable_pager').innerText) == 1) {
                    let table = document.getElementById('gridtable')
                    localStorage.setItem('bl_actuel', 0)
                    localStorage.setItem('tab_bl_pos', 1)
                    localStorage.setItem('count_bls', table.rows.length - 1)
                    clickTable(table, 1, 1)
                } else {
                    document.getElementById('consulterListArticleByLieuEmbarqAction_button_retour').click()
                }
            }
        }, 25000);
    }
    if (window.location.href == "https://gainde.douanes.sn/gainde/consulterArticleEnregAction.action?pageContext=consulterArticleEnreg") {
        if (localStorage.getItem('bl_actuel')) {
            if (parseInt(localStorage.getItem('bl_actuel')) + 1 == parseInt(localStorage.getItem('count_bls'))) {
                localStorage.removeItem('bl_actuel')
                localStorage.removeItem('bls')
                localStorage.removeItem('count_bls')
                localStorage.removeItem('tab_bl_pos')
            }
        }
        let datas = []
        localStorage.getItem('datas') ? datas = JSON.parse(localStorage.getItem('datas')) : ''
        datas.push(extractBLDetails())
        localStorage.setItem('datas', JSON.stringify(datas))
        document.getElementById('form_button_retour').click()
    }
})