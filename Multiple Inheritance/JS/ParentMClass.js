class ParentMClass {
    #parentMClassProperty;
    constructor(b) {
        this.#parentMClassProperty = b + b;
        console.log('from Parent MClass Constructor ' + this.#parentMClassProperty);
    }
    ParentMClassMethod() {
        console.log('from Parent MClass Method');
    }
}
module.exports = ParentMClass;