if (document.getElementById("next_gridable_pager")) {
    document.getElementById("next_gridable_pager").click()
}


function extractDatas(tree, jsonResult) {
    let returned = {}
    Object.keys(tree).forEach((key) => {
        returned[`${key}`] = result[`${key}`]
    });
    return returned;
}

function getAllDatas(url, records) {
    let x = url.split('&page')
    let y = x[0].split('&rows')
    let newUrl = y[0] + `&rows=${records}&page${x[1]}`
    let response = await fetch(newUrl, { method: 'GET' })
    sendRequest(endpoint, extractDatas({ listeManifeste: [] }, response.json()))
}

function handleDatasFromUrl(url, request) {
    let splitted = url.split('?')
    let datas = {}
    switch (splitted[0]) {
        case '/gainde/manifesteGrid.action':
            datas = extractDatas({
                records: 0
            }, request.responseText)
            getAllDatas(url, datas.records)
            break;
        case '/gainde/listEnregArtEmbarquementGridAction.action':
            datas = extractDatas({
                listeLieuEmbarqGrid: []
            }, request.responseText)
            getAllDatas(url, datas.records)
            break;
        case '/gainde/listArtEnregGridAction.action':
            datas = extractDatas({
                listeArtParLieuEmbarqGrid: []
            }, request.responseText)
            getAllDatas(url, datas.records)
            break;
        default:
            break;
    }
}

function sendRequest(endpoint, datas) {
    fetch(endpoint, {
        method: 'POST',
        body: JSON.stringify(datas)
    }).then((response) => {
        console.log(response)
    })
}

function serializeObject(object) {
    let output = "";
    let value;
    Object.keys(object).forEach((key, index) => {
        value = object[`${key}`]
        index == 0 ? output += `${key}=${value}` : output += `&${key}=${value}`;
    });
    return output;
}

(function(open) {
    XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
        this.addEventListener("load", function() {
            handleDatasFromUrl(url, this)
        }, false);
        open.call(this, method, url, async, user, pass);
    };
})(XMLHttpRequest.prototype.open);

function includeFileSaver() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://cdn.jsdelivr.net/npm/file-saver@2.0.2/dist/FileSaver.min.js';
    document.head.appendChild(script);
}