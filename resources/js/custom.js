let enMacusi = document.getElementById('enMacusi');

let wordArray = []
let concept = []
function renderFields(field){
    let word = ''
    let syllabeIndex = field.name.substring(field.name.length-1)
    let syllabeStr = field.value
    wordArray[syllabeIndex] = syllabeStr

    for (const e of wordArray) {
        word+=e
    }
    console.log(word)
    console.log(enMacusi.setAttribute('value', word))
}
