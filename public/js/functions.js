(function(open) {
    XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
        this.addEventListener("load", function() {
            handleDatasFromUrl(url, this)
        }, false);
        open.call(this, method, url, async, user, pass);
    };
})(XMLHttpRequest.prototype.open);

function extractDatas(tree, jsonResult) {
    let returned = {}
    result = JSON.parse(jsonResult)
    Object.keys(tree).forEach((key) => {
        returned[`${key}`] = result[`${key}`]
    });
    return returned;
}


function handleDatasFromUrl(url, request) {
    let splitted = url.split('?')
    let datas = {}
    switch (splitted[0]) {
        case 'https://gaindeintegral.douanes.sn/gainde/manifesteGrid.action':
            datas = extractDatas({
                listeManifeste: [],
                records: 0,
                total: 0,
                rows: 20
            }, request.responseText)
            sendRequest('endpoint', datas)
            break;
        case 'https://gaindeintegral.douanes.sn/gainde/listEnregArtEmbarquementGridAction.action':
            datas = extractDatas({
                listeLieuEmbarqGrid: []
            }, request.responseText)
            sendRequest('endpoint', datas)
            break;
        case 'https://gaindeintegral.douanes.sn/gainde/listArtEnregGridAction.action':
            datas = extractDatas({
                listeArtParLieuEmbarqGrid: []
            }, request.responseText)
            sendRequest('endpoint', datas)
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

(function(open) {
    XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
        this.addEventListener("load", function() {
            handleDatasFromUrl(url, this)
        }, false);
        open.call(this, method, url, async, user, pass);
    };
})(XMLHttpRequest.prototype.open);
