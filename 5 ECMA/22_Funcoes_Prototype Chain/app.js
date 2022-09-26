//Object Prototype || Prototype Chain

Object.prototype.attr50 = "z"


// Literal
let animal = { attr1: 'a'}
    let vertebrado ={__proto__: animal, attr2: 'b',}
        let ave ={__proto__: vertebrado, attr3: 'c', attr2: 'x'}

console.log(ave.attr2, ave.attr1, ave.attr3, ave.attr50)