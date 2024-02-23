const FirstMixins = require('./Mixins/FirstMixins.js');
const SecondMixins = require('./Mixins/SecondMixins.js');
const ParentMClass = require('./ParentMClass.js');

class MyClass extends ParentMClass {
    myclassProperty;
    constructor(a, b) {
        super(b);
        this.myclassProperty = a;
        console.log('from My Class Constructor and my Name is: ' + this.myclassProperty);
    }
    myClassMethod() {
        console.log('from My Class Method');
    }
}
Object.assign(MyClass.prototype, FirstMixins, SecondMixins);
var myClassObj = new MyClass('Md. Meadul Islam', 32);
myClassObj.firstMixinsMethod();
