# Jquery code example using Axios



Installing Axios

npm:

```
$ npm install axios
```

The Bower package manager:
```
$ bower install axios
```

Or a content delivery network:
```
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
```

Code example:


```js

import axios
axios.get('https://maylancer.org/api/nuban/api.php?account_number=12345678910&bank_code=421')
.then((response) => {
   console.log(response.account_name);
   console.log(response.account_number);
   console.log(response.bank_code);
   console.log(response.Bank_name);
   console.log(response.status);
   console.log(response.execution_time);



   //Here are some useful code to get user first and last name 

   let names = response.account_name.replace(/\s{2,}/g, ' ').split(' ');

   let firstName = names[0];
   let lastName = names[1];




});

```