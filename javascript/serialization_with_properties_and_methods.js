'use strict'; 
const Serializer = (function () {
  
  const _replacer = (key, value) => {  
      if (typeof value === 'function') {    
          return value.toString();  
      }
    
      return value;
  };
  
  const _reviver = (key, value) => {  
        if (typeof value === 'string' && (value.indexOf('function ') === 0 || value.indexOf('()') !== -1 )) {  
            console.log(value);  
            let functionTemplate = value;    

            return new Function(functionTemplate); 
        }  

        return value;
  };

  const serialize = (val) => JSON.stringify(val, _replacer);
  const unserialize = (val) => JSON.parse(val, _reviver);
  
  return {serialize, unserialize};
})();

// test 
let persons = [
    {
        firstName: "Foo",
        lastName: "Bar",
        fullName: () => {
            return `${this.firstName} ${this.lastName}`;
        }
    },
    {
        firstName: "Foo",
        lastName: "Bar",
        fullName() {
            return `${this.firstName} ${this.lastName}`;
        }
    },
    {
        firstName: "Foo",
        lastName: "Bar",
        fullName: function() {
            return `${this.firstName} ${this.lastName}`;
        }
    },
];

for (const o of persons) {
    const serialized = Serializer.serialize(o);

    console.log(serialized);
    console.log(Serializer.unserialize(serialized))
}
