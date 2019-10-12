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

module.exports = {extractDatas, requestHandler}
