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
/*REACT.js

        # Declarative VS imparative
            - REACT is declarative, This is its meaning the workFlow is ready
                and it is available for you to use.
            - first, we have a note< react has many workFlow
            - Imparative : You must work out your workflow (yourself),
                and you must work every big and small thing (yourself) too.
            Ex: when you want any thing, follow many steps: for example,
                - go to the kitchen, open fridge, remove kitchen from fridge, ....., bring food.
            - Declarative : the system gives you (ready workflow),
                and coordinates(work) all your work for you.
            Ex: when you want any thing, just requst it< like this,
                - i want dinner with chicken.

        # npm
            - it's a huge library that suppert react, we need it to work (CLI)
                and download many libraries.

        #jsx(javaScriptXml),that converts the code like html we write inside React files,
        into difficult codes in JavaScript so that the browser understands it.
            Ex: ReactDom.render(
                <div>hello world</div>, //This is Jsx
                document.getElementById("root")
                );

            - one of roles in JSX , must there is a container contains all this,
                that container is <div></div> , or we use <Fragment></Fragment>, and we maake import for it up.

        # A component divides a web page into multiple separate parts,
        Each part of a component has its own lifecycle.

        #Every thing in React is an Object.
            -style={{color :"red"}}
            -Inner arch is an object
            -outrer arch to JSX

            -we don't use foreach inner jsx, we use map, because default jsx work foreach

        #state ......
            - It's a lifeCycle walks with you, from the strat to the end
                we have information about old data, middele and new, we can
                get any data we want.
            - Any data that is modified use to it 'State'
            - State is a sync
            - Any update that occurs(happens) in state will result in the data being (rerender) re-displayed again

            EX: const [filter, setFilter] = useState("");
            - In short, filter is the current value,
                and setFilter is the function used to update this value in React.

        #Control Component
            - The meaning is the react will control the Form, it will take data
            - State be in charge(responsible) of everything.
        #UnControl Component
            - React will leave Dom to handle with The Form in the traditional way.
            - UseRef like (getIlementById), we control the form using notmal DOM

        - In general, 90% we use control component, we update form by state.

        #Call Back function
            - instad of i send data from parent to child, i can send data from child to parent.

        #Render
            - In React, render is the function responsible for converting a React component into
                renderable (قابلة للعرض) DOM elements on the page.
            - render takes JSX and converts it to actual DOM elements.

        #PART 2
        #UseEffect
            - UseEffect always come after state.
            - take two basic parameters, the first parameter will be (call back ffunction Or Anoymos function) and is very important, it doesn't work without it.
            EX: useEffect(() => {
                    console.log("useEffect one time");
                } , []);
                - () => {} this is call back function, and the Api code inner it
                - [] inner it (useEffect dependency array)
                - while useEffect dependency array is empty, useEffect will work one time.
                - will work after first render.

            1: "useEffect with empty dependency array"
            - rules for all useEffects statues.
                render
                useEffect

                Ex: useEffect(() => {
                        console.log("useEffect one time");
                ` } , []);
                - "useEffect with empty dependency array"
                - () => {} this is call back function, and the Api code inner it
                - [] inner it useEffect dependency array
                - while useEffect dependency array is empty, useEffect will work one time.
                - will work after first render

            2: "useEffect with not empty dependency array"
            - rules
                render
                useEffect
                name can be state, props or any var we define it in this component.
                update the state -> re-render (sec render)
                useEffect -> watcher -> dependency -> name ? updated -> yes -> do the effect / no -> skip the effect.

                Ex: useEffect(() => {
                        if(name) {
                        console.log("update");
                        }
                    } , [name]);
                - "useEffect with not empty dependency array"
                - [name] we say to useEffect , watch name, any cahange will happen in name -> this effect will work.
                - run when update happen.
                - when: after first render, and when dependency updated.

            3: "useEffect with no dependency array.
                - run when update happens
                - when: after first render, and after re-render (sec render)
                Ex: useEffect (() =>{
                    console.log("effect");
                });

                - rules
                    render
                    change->state
                    re render
                    use effect


            4: clean up

                Ex: useEffect(() => {
                    if(name){
                        const Timeout = setTimeout(() => {
                            console.log("effect");
                        }, 2000);

                        return () => {
                            clearTimeout(Timeout);
                        };
                    }
                } , [name]);

                rules:
                    render
                    use effect
                    return / init clean up

                    change state
                    render
                    clean up excute.
                    use effect -> watcher -> name update -> run
                    return / init clean up

            - when we use any state in useEffect we must put it in dependency array.
            - what will happen if it is sitting the state with the same value?
                -  the rule says : useEffect , if the state came to it
                the (same exactly value) will re-render (one time).

            -Ex: we have two useEffect will work with each other, the second useEffect will fire Api
                in the same time(directly), and the first useEffect will work the setTimeout directly, but
                the first if see the same term => will not re-render, so the second useEffect will
                not work.

            - How to get previous props_state with React Hooks.?? //EMPORTANT
                - via useRef.
                - useRef use like getElementById, but here we assign it data,
                - and if happen change will not happen re-ernder,
                    reverse state (if happen change will happen re-render)
                - so we need a thing to save without effect (via useRef)

            -EX:
                const [term, setTerm] = useState('javascript');
                const prevTermState = useRef();
                useEffect(() => {
                    prevTermState.current = term;//here we define currrent and put into it term value.
                });

                -what will happen here, in this example?
                    1- initiate the component
                        - state -> javaScript / useRef -> undfine (one time only)
                        - skip -> useEffect
                        - prevTerm -> useRef -> undefine
                        - render -> term(search) -> useRef (undefine)
                        - do the effect -> useRef.current = term -> javaScript

                    2- change -> state
                        - skip -> useEffect
                        - prevTerm -> useRef -> javaScript
                        - render -> term(javaScript2) -> useRef (javaScript)
                        - do the effect -> useRef.current = term -> javaScript2

                    3- change -> state
                        - skip -> useEffect
                        - prevTerm -> useRef.current -> javaScript2
                        - render -> term(javaScript23) -> useRef (javaScript2)
                        - do the effect -> useRef.current = term -> javaScript23


            - costume hooks is a function , inner it is react life cycle or any function like useRef
                or useStete , this function can write logic, get data or return data. 
                but the basic pattren for it (return data)
                - if return jsx will be component, so it writes logic or return data.     
                
                

            - How useEffect and costum hook will work behind the sence??

                Ex:
                1- in " export default function App3() "
                    const [term, setTerm] = useState('javascript');
                    const [result, setResult] = useState([]);
                    const prevState = usePrevState(term);

                    useEffect(() => {
                    const search = async () => {
                        const respond = await axios.get(' http://127.0.0.1:8000/api/tset7', {
                            params: {
                                location: 'query',
                                list: 'search',
                                origin: '*',
                                format: 'json',
                                srsearch: term, 
                            },
                        });
                        setResult(respond.data);
                        }
                            if (!result.length) {
                                if (term) {
                                    search();
                                }
                            } else if(prevState !== term) {
                        const debounceSearch = setTimeout(() => {
                            if (term) {
                                search();
                                }
                            }, 1500);

                            return () => {
                                clearTimeout(debounceSearch);
                            };
                        }
                    }, [term, result.length, prevState]); 

                2- in " const usePrevState = (state) => {} "
                    const usePrevState = (state) => {
                    const ref = useRef();

                    useEffect (() => {
                        ref.current = state;
                    });

                        return ref.current;
                    }

                - init : react will start its codes for the first time.
                - term : state -> javaScript
                - results : state -> array:empty
                - prevTerm : custom hook , it names (use(..anyWord...))
                - in 2: ref = useRef(); will be its value : 1: undefined
                - skip useEffect -> return undefined 
                - useEffect API -> skip 
                - return 

                - after render
                - react will find useEffect in 2 didn't work, so react will work this useEffect.
                - what will work this useEffect here, will work update for ref.current and git a value.
                    but this don't work return, just inject the Ref,
                    (In short here: useEffect inside costum hooks -> skip useEffect -> return undefined )
                - useEffect API -> update state -> result -> 
                    
                - new render
                - term : state -> javaScript
                - don't create state like the first render , just show its value.
                - result : state -> array: list form api
                - prevTerm -> costum hook -> return javaScript  because after render 1 : useRef -> javaScript,
                    and don't work sueEffect.
                
                - after render 2 
                - useEffect -> inside costum hooks -> useRef -> javaScript
                - useEffect -> API -> =>>>> javaScript vs prevTerm : javaScript

                - update input -> update state -> re render 
                - term : state -> javaScript2
                - result : state -> old data
                - prevTerm -> costum hook -> javaScript
                - return

                - after render 3
                - useEffect -> inside costum hooks -> useRef -> javaScript2
                - useEffect -> API -> =>>>> javaScript2 vs prevTerm : javaScript =>>> search will run =>> update state

                - re render 4
                - ...


        #Optimization
                - react go to return statment -> it works init to all component in this return.    
                - but if we have a lot of component in this return, it will take a lot of time.
                - so we can optimize it.


            = when i install react, actualy i install two liprary (react and react-dom)
                in web its name will be react-dom, but in mobile its name will be reactnative.

                - react responsability will be create any logic (like function, class, loop, etc)
                - when i use (hooks helper) like useRef, useState, useEffect, etc, and component
                    it will be create in react, and these things will be understand by react.    
                - And react responsability will understand if happen update in state or proos,
                    and it will manage globle state management like context.
                - it builds componets and tree components.  

                - react-dom shows the final result that will be send from react
                - reract works all processes that we spoke about it up, and send 
                    the results to react dom to show it.
                - react-dom is a library that we use to render the final result.
                - React DOM is a library that is used in React applications to render
                    the final output of the components to the DOM (Document Object Model).
                - React-dom contains virtual Dom , which means a stage between react logic
                    real dom which is what we see in the browser.
                - virtual dom is built as an object inside another object, instead another object, etc.

                - re evaluation : which means react come back to work every thing again exept state.
                
                Ex- React -> Update state/porps/globle state -> re-run, re-evaluate line by line
                        -> check the dev 
                        -> there is Def (new state/porps/globle) ? Call ReactDom(re-render, new node only)
                        : Dont call ReactDom.
                Ex- React -> Update state/porps/globle state -> re-run, re-evaluate line by line
                        -> reach to return -> component -> re-run, re-evaluate line by line
                        -> check the dev 
                        -> there is Def (new state/porps/globle) ? Call ReactDom(re-render, new node only)
                        : Dont call ReactDom.        

                - re-run, re-evaluate must work , but re-render maybe yes(if happen change) or no(if not).
                
                - react whether it comes to it new props or not, or is happened change in state.
                    regardless will be re-render or not, will be re-evaluate. (EMPORTANT)
                    (All things before return will work)

                - re-render : This term is specific to the UI.
                - re-evaluate : This term is specific to the Logic.
                - re-run : This term will work this or that.


                - Okey, Okey...
                - how can we solve all these problems??? 
                ... i will come later...
                bye bye ..
                
                - well , We are back ..
                
                - I will make re-evaluate look like re-render , don't happen any thing unless if happen 
                    change in state or porps. Don't make evaluate work unless if happen change in props.
                    (we will do all this via react memo)

                - react memo in simple: it takes props copy from it, why , to retrun empty.
                Ex: export default React.memo(viewText)
                    we put it here to work, and put inside it what don't want to work.  
                - we put react memo on parent, to prevent all children(what we use it in return statment)
                    to work.      

                - we have in javaScript (object, array, function) it is call referene type and all of them 
                    are object. so (( obj1 = {name: 'anas'} != obj2 ={name: 'anas'} ))
                    so will excute as props every time. 
                    reverse (( name = 'anas' === name2 = 'anas' )) wil not work. 
                    
                    Ex: 1. obj1 = {name: 'anas'} every evalute will excute because it takes different value.
                        2. name = anas every evalute will not excute because it takes same value.
                        1 will work evaluate then after it rerender
                        2 will not work evaluate
                    - SO to prevent (1) what should we do?
                        (we use useMemo)
                        Ex: const name = useMemo(() => {
                            return {name: 'anas'}
                        }, []);
                        this concept is used with array, object and function in return status.
                    - using useMemo like exactly using useEffect , it uses arrow function.
                        so we put the object that evalute evert time inside useMemo to excute one time.   
                        and if we want to excute another time without prevent => put dependcy => []. 
                
                - the Object: three types => object, array, function... 
                
                - to prevent function(without return) works again, we use useCallBack .
                        Ex: const ageHandler = useCallback(() => {
                            console.log();
                        },[] );
                        - but if it was function with retrun => we use useMemo. 
                        - useCallBack take callBack function, first thing.
                        - stande form for useCallBack:
                            Ex: const ageHandler = useCallback(fcunction() {} ,[])
                        - useCallback worl (mimomize) for function inside it.
                        - mimomize means prevent the function from (revalute and rerender) again.  
                        - but useMemo prevent (only) what it returns inside it.

                - if spicefic state and we want to show it , but it inside useMemo, what shode we do?
                    we put inside dependency array , to work it like watcher .
                        Ex: const const name = useMemo (() => {
                            return user
                        }, [user]); 
                        if the use changed return new reference => will new name.
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
