export function previewMacusi() {
    //Updates 'enMacusi' field
    let wordsArray = []
    let conceptArray = []

    for(let i = 0; i<6; i++){
        let el = document.getElementsByName('syllabe_'+i)[0]
        wordsArray.push(el.value)
        conceptArray.push(el.options[el.selectedIndex].dataset.concept)
    }

    let macusiPreview = document.getElementById('enMacusi');
    let conceptPreview = document.getElementsByName('concept')[0]

    let macusiStr = ""
    let conceptStr = ""
    for (const syllabe of wordsArray) {
        if(syllabe === null) continue
        macusiStr += syllabe
    }

    for(const concept of conceptArray){
        if(concept === undefined) continue
        conceptStr += concept + ' / '
    }


    macusiPreview.value = macusiStr.length === 0 ? '---' : macusiStr
    conceptPreview.value = conceptStr.length === 0 ? '---' : conceptStr.substring(0, conceptStr.length-2)
}


