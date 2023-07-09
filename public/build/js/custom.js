function previewMacusi() {

    let enMacusi = document.getElementById('enMacusi');

    let wordArray = []
    let concept = []

    console.log('test')
}


function translateAll(){
    const Reverso = require('reverso-api')
    const reverso = new Reverso()

    reverso.getTranslation(
        'Hello World!',
        'english',
        'french',
        (err, response) => {
            if (err) throw new Error(err.message)
            console.log(response)
        })
}
