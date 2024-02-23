class NewClass {
    static staticProperty;
    normalProperty;
    constructor(staticVal, normalVal) {
        NewClass.staticProperty = staticVal;
        this.normalProperty = normalVal;
        console.log('from Constructor');
    }
    static staticMethod() {
        console.log('from Static Method- (' + this.staticProperty + ' and ' + NewObj.normalProperty + ')');
    }
    normalMethod() {
        console.log('from Normal Method- (' + NewClass.staticProperty + ' and ' + this.normalProperty + ')');
    }
}
const NewObj = new NewClass('staticValue', 'normalValue');
NewObj.normalMethod();
NewClass.staticMethod();
