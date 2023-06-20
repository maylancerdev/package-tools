# Javascript Code


Using the browser [Fetch API](https://pypi.python.org/pypi/requests) and a [CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS) request:

```js
fetch('https://maylancer.org/api/nuban/api.php', {
  method: 'get',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({
    account_number: '12345678910',
    bank_code: '421',
  }),
}).then(response => {
  return response.json();
}).then(data => {
  console.log(data);
});

```