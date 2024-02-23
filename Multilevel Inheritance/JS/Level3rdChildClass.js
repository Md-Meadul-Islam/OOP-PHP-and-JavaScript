const Level2ndChildClass = require('./Level2ndChildClass.js');
class Level3rdChildClass extends Level2ndChildClass {
    Level3rdChildClassProperty;
    constructor(Level1, Level2, Level3) {
        super(Level1, Level2);
        this.Level3rdChildClassProperty = Level3;
    }
    Level3rdChildClassMethod() {
        console.log("Level 3rd Child Class Method");
    };
    Level2ndChildClassMethod() {//overridded from 2nd Level
        super.Level2ndChildClassMethod();//get Parent class's functionality in this method
        console.log('Overrided Level2 Child Class\'s Method');
    }
}
const Level3ndObj = new Level3rdChildClass('level one', 'level two', 'level three');
console.log(Level3ndObj.level1stChildClassMethod());
console.log(Level3ndObj.Level2ndChildClassProperty);