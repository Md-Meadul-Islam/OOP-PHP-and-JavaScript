
class Level1stChildClass {
    #level1stChildClassProperty;//Private Property
    constructor(Level1) {
        this.#level1stChildClassProperty = Level1;
    }
    level1stChildClassMethod() {//i can access form any Child module
        return `Level 1st Child Class Method, and Private Property is- ${this.#level1stChildClassProperty}`;
    }
    #level1stChildClassPrivateMethod() {//Private Method; i can only access this method in this module
        return `Level 1st Child Class Private Method, and Private Property is- ${this.#level1stChildClassProperty}`;
    }
}
module.exports = Level1stChildClass;