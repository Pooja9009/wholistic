[1,2,3,5]

class Person

{"name": 'abc', 'address': '123 st road'}

var person1 = new Person();
var person2 = new Person();

[person1, person2]

[{"name": 'abc', 'address': '123 st road'}, {"name": 'abc', 'address': '123 st road'}]



["favtouite": person1, 'blocked': person2]

[
    "favtouite": {
        "name": 'abc', 'address': '123 st road'
    }, "blocked": {
        "name": 'abc', 'address': '123 st road'
    }
]

[
    "favtouite_user": {
        "name": 'abc', 'address': '123 st road'
    }, "blocked_users": [
        {
            "name": 'abc', 'address': '123 st road'
        },{
            "name": 'abc', 'address': '123 st road'
        },{
            "name": 'abc', 'address': '123 st road'
        }
    ]
]