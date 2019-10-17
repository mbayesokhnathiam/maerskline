if (document.getElementById("next-button")) {
    document.getElementById("next-button").click()
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
    })
}

// function extractTable() {
//     $('#tblOne > tbody  > tr').each(() => {
//         $(this).children("td").href;
//     });
// }