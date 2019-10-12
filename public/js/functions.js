function extractDatas(tree, jsonResult) {
    let returned = {}
    result = JSON.parse(jsonResult)
    Object.keys(tree).forEach((key) => {
        returned[`${key}`] = result[`${key}`]
    });
    return returned;
}

function requestHandler() {
    console.log(this.responseText)
}

let http = new XMLHttpRequest()
http.addEventListener("load", requestHandler)
http.open('GET', 'https://swapi.co/api/people/1')
http.send()
