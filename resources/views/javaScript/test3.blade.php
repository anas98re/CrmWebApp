<!DOCTYPE html>
<html>

<head>
    <title>JavaScript ES 6</title>
</head>

<body>
    <p>l</p>

</body>
<script>
    /*NOTES

        # Before Template literals (Template strings)
            - We cannot use Var we defined inside the "function" scope.(here is normal)
            - We can use Var we defined inside the "if" scope.(here is a problem)
            - We can use Var we defined inside the "for" scope.(here is a problem)
            - We can define a function innner the (window object), the base object in javaScrip.(It is a mistake)
            - We can redeclare Var in javaScript. Ex: var A = 5; var A = 6;  (It is a mistake)
            - If we print Var before declare it, the output will be (undefined).(It is a mistake)

            * let solved these problems.

        #Primitive
            - It's (undefined, Boolean, String, Number, BigInt, Symbol)
            - It's not (array, object, methode, data)
            - It has no methodes, like push, pull ..
            - It's immutate(connot edit)
            - (array, object, methode, data) are mutate (can edit)
            - It's working (pass by value)
            - (array, object, methode, data) are working (pass by object)

            - Object.freeze() like final in OOP
            - mutate not mean re-asign
            - We use const in array and other things to ensure that no one changed it using an mutate method.


        #R-Function

        #Spraed operator
            - It's instead of Object.assign([],), EX: const names2 = [" ",...names1, " "] instead of Object.assign([], names1)
            - Ex2 : [...array1, ...array2] instead of array1.concaat(array2)
            - Ex3 : const obj1 = {name : "anas", age:24}
                    const obj2 = {...obj1} OR const obj2 = {...obj1, status : true}
                    console.log(obj2)

        #Spraed operator - Function calles
            - Ex1:  const number = [1,2,8,5,4]
                    const maxNum = Math.max(...number)
                    console.log(maxNum)
            - Ex2: const returnNames = (name1, name2, name3) => {
                            console.log(name1)
                            console.log(name2)
                            console.log(name3)
                        }
                    const names = ["anas", "ahmed", "rami"]
                    returnName(...names)

        #Rest operator
            - Ex1: function getFullName(fName, lName, ...params){
                            console.log(fName)
                            console.log(lName)
                            console.log(params)
                        }
                    getFullName("hamed", "radi", "kamel", "qamar", "raef", ["tt","yy"] )

        #Destructuring - Araay destructuring
            - Ex1 : const names = ["laila", "isam", "ramez"]
                    const [name1, name2, name3] = names;
                    console.log(name1, name2, name3);

                    OR onather ex:

                    const [ , , name3] = names;
                    console.log(name3);

        #Destructuring - Rest Parame
            - Ex1 : const names = ["laila", "isam", "ramez"]
                    const [name1, ...parame] = names;
                    console.log(parame);

        #Destructuring - function
            - Ex1 : function fullName(){
                return ["anas", "mohammed", "refai"]
                }
                const [n1, ...params] = fullName()
                console.log(n1, params)

        #Destructuring - swapping variable
            - Ex1 :  let a = 1;
                    let b = 2;

                    [a , b] = [b, a]
                    console.log(a , b)

        #Destructuring - Object destructuring
            - Ex1 : const userData = {user_name:"anas", user_age:24, user_address:"sj"}
                    const {user_name, user_age, user_address} = userData
                    console.log(user_name, user_age, user_address)

                    OR :

                    const userData = {user_name:"anas", user_age:24, user_address:"sj"}
                    const {user_name:user_name_1, user_age, user_address} = userData
                    console.log(user_name, user_age, user_address)

                    const [ , , name3] = names;
                    console.log(name3);

        #Destructuring - Object Rest Parames
            - Ex1 : const names = {user_name:const {name1, ...parame} = names;
                    conso"anas", user_age:24, user_address:"sj"}
                    console.log(parame);

        #Destructuring - Nested destructuring
            - Ex1 : const contries = [
                            { country : "syria", loc : "Asia"},
                            { country : "ksa", loc : "Asia"},
                            { country : "Arg", loc : "Amrica"},
                            "required"]
                    const [{country, loc}, {country: country2, loc: loc2}] = contries
                    console.log(country,country2);
            - Ex2 : const userData = {
                            persons : [
                                {name4: "anna", age55: 30},
                                {name4: "esraa", age55:55, more:["girl","150 cm"]},
                            ],
                            status : "active"
                    }
                    const {persons: personsArrayFormat, persons : [item1, {name4,age55, more: moreArrayormatt, more: [gender,height]}], status} = userData // * if i get all info for this object
                    console.log(status,persons);

        #Destructuring - Parameters
            - Ex1 : const userInfoArray = ["jod", 23, "ma"]
                    const userInfoObject = [name:"jod", age: 23, address: "ma"]

                    function getUserInfo([name, age, address]){
                        console.log(name)
                        console.log(age)
                        console.log(address)
                    }

                    getUserInfo(userInfo)

        #Array.prototype.forEach
            - Before forEach: const names = ["ahamad1", "ahmad2", "ahmad3"];
                                for(let i=0; i<names.length: i++){
                                    console.log(names[i])
                                }

            - After forEach: names.forEach(function(el, idx){
                                    console.log(el)
                                })

            - forEach with R-function:  Ex1: names.forEach((el, idx) => {
                                                console.log(el)
                                            })
                                        Ex2: names.forEach(el => {
                                                console.log(el)
                                            })
                                        Ex3 :(more cleane) names.forEach(el =>  console.log(el))

        #for.Each and destructuring
            - Ex1 : countries = [
                        { country : "syria", loc : "Asia"},
                        { country : "ksa", loc : "Asia"},
                        { country : "Arg", loc : "Amrica"},
                    ]
                    countries.forEach(({country,loc}) => {
                        if(loc =="Asia"){
                        console.log(country)
                        }
                    })

        #for.Each with object ?????
            - Note : we cannot use forEach with object, as we used it with array
                    , buecause it contines key & value, but we can use it like this:
                    Object.values(x).forEach(el => { })
                    Ex1: const country = { country : "syria", loc : "Asia"}
                        Object.values(country).forEach(el => { console.log(el) })

                    Ex2: const country = { country : "syria", loc : "Asia"}
                        Object.keys(country).forEach(el => {
                            console.log(`${el}: ${country[el]}`)
                        })

                    Ex3: object of object:
                        const country = {
                            1:{country : "syria", loc : "Asia"},
                            2:{country : "jorden", loc : "Asia"}
                        }
                        Object.values(country).forEach(el => { console.log(el) })

                    Ex4:
                        const countries = {
                            1:{country : "syria", loc : "Asia"},
                            2:{country : "jorden", loc : "Asia"}
                        }
                        Object.keys(countries).forEach(el => {
                            console.log(`${el}: ${countries[el].country}`)
                        })

        #Map ..............
                - it like forEach, but it  make a new array
                - Ex1:  const numbers = [10,220,30,40]
                        const newNumber = numbers.map(el => el*2)
                        console.log(newNumber)

                - Ex2:  const numbers = [10,55,30,40]
                        const newNumber = numbers.map(el => el%2 === 0 ? el*2 : el)
                        console.log(newNumber)

        #Map with object
                -Ex1:   const country = { country : "syria", loc : "Asia"}
                        const newContry = country.map((el) => el)
                        console.log(newContry)

                -Ex2:   const country = [{country : "syria", loc : "Asia"}, {country : "turkia", loc : "Asia"}]
                        const newContry = country.map(({country, loc}) => country)
                        console.log(newContry)

                -Ex3:   const country = {1:{country : "syria", loc : "Asia"}, 2:{country : "turkia", loc : "Asia"}}
                        const newContry = Object.values(country).map(({country, loc}) => country)
                        console.log(newContry)

        #Filer ...............
                - map must to return same size of array, but filter return what we need from array
                - It's like Map, but with condition.
                - Ex1:  const numbers = [1,2,3,4,5,6,7,8,9,10]
                        const newNumbers = numbers.filter((el) => el > 4)
                        console.log(newNumbers)

                - Ex2:  const names = [
                            {user_name:"anas", user_age:24, user_address:"sj"},
                            {user_name:"thabet", user_age:29, user_address:"sj"},
                            {user_name:"reaf", user_age:30, user_address:"sj"},
                            {user_name:"isam", user_age:25, user_address:"sj"}
                                ]
                        const namesFilter = names.filter(({user_name, user_age}) => user_age>25 && user_name === "reaf")
                        console.log(namesFilter)

        #Example to all consepts we lerned...
                -   const compare = (a,b) => {
                            const ageA = a.user_age;
                            const ageB = b.user_age;
                            return ageB - ageA;
                        }
                    const names = [
                    {user_name:"Karem", user_age:30},
                    {user_name:"Karim", user_age:34},
                    {user_name:"mohammed", user_age:31},
                    {user_name:"mohammed", user_age:40},
                    {user_name:"mona", user_age:29},
                    {user_name:"mina", user_age:21},
                    {user_name:"ahmed", user_age:26},
                    {user_name:"reham", user_age:24},
                    {user_name:"mina", user_age:22},
                    {user_name:"michel", user_age:19},
                        ];
                    const newNames = names
                    .sort(compare)
                    .slice(0,7)
                    .filter(({user_age}) => user_age > 26)
                    .map((el) => el.user_name === "Karim" ? {...el,user_name : "Karem"} : el)
                    console.log(newNames)hel", user_age:19},
                        ];
                    const newNames = names.sort(compare)
                    console.log(newNames)

        #Include .............
                - Ex1:  const names = ["anas", "isam","abed", "israa"]
                        if (names.includes("karam")) {
                            console.log("available")
                        } else {
                            console.log("not available")
                        }

                - Ex2:  const names = ["anas", "isam","abed", "israa"]
                        const newName = names.filter((el) => el.includes("as"));
                        console.log(newName)

        #find ..............
                - Ex1:  const numers = [2,3,2,6,4,2,7,1]
                        const findBy = numers.find((el) => el === 2)
                        console.log(findBy)
                -Ex2 :  const names = [
                            {user_name:"anas", user_age:24, user_address:"sj"},
                            {user_name:"thabet", user_age:29, user_address:"sj"},
                            {user_name:"reaf", user_age:30, user_address:"sj"},
                            {user_name:"isam", user_age:25, user_address:"sj"}
                                ]
                        const namesFind = names.find((el) => el.user_name === "anas")
                        console.log(namesFind)

        #find and map ....
                - Ex1 : const shoppingcart =[
                            {id:1, quantity: 2},
                            {id:2, quantity: 1},
                        ]

                        const selectItem = {id:1, quantity: 5};

                        const cartHandler = (shoppingcart, selectItem) => {
                            const checking = shoppingcart.find((el) => el.id === selectItem.id)

                            if(checking) {
                                return shoppingcart.map((el) =>
                                el.id === selectItem.id ? {...el,quantity: el.quantity + selectItem.quantity} : el
                                );
                            }
                            return [...shoppingcart, {...selectItem}]
                        };

                        const cartStatus = cartHandler(shoppingcart, selectItem);
                        console.log("old", shoppingcart)
                        console.log("new", cartStatus)

                - Ex2 : const shoppingcart =[
                            {id:1, quantity: 2},
                            {id:2, quantity: 1},
                        ]

                        const selectItem = {id:11, quantity: 5};

                        const cartHandler = (shoppingcart, selectItem) => {
                            const checking = shoppingcart.find((el) => el.id === selectItem.id)

                            if(checking) {
                                return shoppingcart.map((el) =>
                                el.id === selectItem.id ? {...el,quantity: el.quantity + selectItem.quantity} : el
                                );
                            }
                            return [...shoppingcart, {...selectItem}]
                        };

                        const finalShopingCart = cartHandler(shoppingcart, selectItem);

                        const fullInfo = [
                                        {id:1, name2: "dsds"},
                                        {id:2, name2: "sdsdcc"},
                                        {id:11, name2: "hgtb"},
                                    ]

                        const retriveQuantity = (fullInfoID) => {
                            const data = finalShopingCart.find((el) => el.id === fullInfoID);
                            return data.quantity;
                        }

                        fullInfo.forEach((el) =>
                            console.log({id: el.id, name: el.name2, quantity: retriveQuantity(el.id)})
                        );

        #findIndex .......
                - it return the key,  but find retrun the object
                - (else) in findIndex return (-1), but in find return undefined



*/


</script>
<script>
    console.log("Anas")

    var name = "Anas";
    var age = 24;


    //# Before Template literals (Template strings)
    //
    function ageCheck() {
        if (age > 40) {
            return "too old"
        } else
            return "too young"
    }

    var outPut = 'i\'\m name is' + name + 'and my ' + age +
        ',Years old' + ageCheck();
    //

    //# After Template literals (Template strings)
    var outPut = `I'm ${name}, and i have ${++age} years old...${age>40 ? "too old" :"young"} `
    console.log(outPut)
</script>
<script>
    //(pass by value)
    let a1 = "s";
    let a2 = a1;
    a1 = "j";
    console.log(a2);


    //(pass by object)
    const name1 = ["anas", "ahmad"];
    console.log(name1);
    // const name2=name1;
    const name2 = Object.assign([], name1);
    name2.push("rami");
    console.log(name2);
    name1.push("rami 8");
    console.log(name1);
</script>
<script>
    //R-Function
    const sumTwoNumbers = (a, b) => a + b
    let x = sumTwoNumbers(1, 2);
    console.log(x)
    //
    const myName = name => name === "Anas" ? "hello Anas" : "hello"
    let y = myName("Anas")
    console.log(y)

    //This is not R-funcction
    function Person() {
        this.age = 44;
        console.log(this);
        var thatClass = this;
        setInterval(function growUp() {
            var newAge = thatClass.age++;
            // console.log(newAge);
        }, 100);
    }

    //This is R-funcction
    function Person() {
        this.age = 0;
        console.log(this);
        setInterval(growUp = () => {
            var newAge = this.age++;
            // console.log(newAge);
        }, 100);
    }


    var p = new Person();
</script>

</html>
