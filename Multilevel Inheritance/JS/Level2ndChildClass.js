const Level1stChildClass = require("./Level1stChildClass");

class Level2ndChildClass extends Level1stChildClass {
    Level2ndChildClassProperty;
    constructor(Level1, Level2) {
        super(Level1);
        this.Level2ndChildClassProperty = Level2;
    }
    Level2ndChildClassMethod() {
        console.log("Level 2nd Child Class Method");
    };
}
module.exports = Level2ndChildClass; 