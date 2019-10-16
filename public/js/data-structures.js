let searchDataTree = {
    manifDateArrivee: '',
    manifMoyenTransport: '',
    records: 0,
    total: 0,
    rows: 20
        //listeManifeste: []
}

let manifesteDataTree = {
    listeLieuEmbarqGrid: []
}

let blDataTree = {
    listeArtParLieuEmbarqGrid: []
}

document.getElementById("import-modal").addEventListener('click', (event) => {
    document.getElementById("import-form").reset()
})

let urls = {
    searchUrl: 'https://gaindeintegral.douanes.sn/gainde/manifesteGrid.action?_search=false&nd=PARAM&rows=PARAM&page=PARAMsidx=&sord=asc&_=PARAM',
    detailUrl: 'https://gaindeintegral.douanes.sn/gainde/listEnregArtEmbarquementGridAction.action?_search=false&nd=PARAM&rows=PARAM&page=PARAM&sidx=&sord=PARAM&_=PARAM',
    vesselUrl: 'https://gaindeintegral.douanes.sn/gainde/listArtEnregGridAction.action?_search=false&nd=PARAM&rows=PARAM&page=PARAM&sidx=&sord=PARAM&_=PARAM'
}
$.ajax({
    url: 'https://gaindeintegral.douanes.sn/gainde/manifestGrid.action?_search=false&rows=10&page=1',
    method: 'GET',
    dataType: 'json'
}).done(function(data, textStatus, jqXHR) {
    console.log('data');
}).fail(function(jqXHR, textStatus, errorThrown) {
    // the response is not guaranteed to be json
    if (jqXHR.responseJSON) {
        // jqXHR.reseponseJSON is an object
        console.log('failed with json data');
    } else {
        // jqXHR.responseText is not JSON data
        console.log('failed with unknown data');
    }
}).always(function(dataOrjqXHR, textStatus, jqXHRorErrorThrown) {
    console.log('always');
});

// module.exports = { searchDataTree, manifesteDataTree, blDataTree }