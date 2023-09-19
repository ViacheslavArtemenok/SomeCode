let obj = {
  name: "Bill",
  age: 47,
  getName() {
    console.log(this.name);
  },
};
console.log(obj);

function getProperty(text) {
  return "TEST_" + text + "_TEST";
}
obj.property = getProperty("Это информационное сообщение");
console.log(obj);
obj.getName();
