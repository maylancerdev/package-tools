# Error response 

Here's an example of when you've enter wrong account information:

```JSON
{
    "message": "Try again. Unable to get bank details",
    "status": "error"
}
```

Or when you're missing a required variable such as account number or bank code:

```JSON
{
    "message": "Only 10-digits account number is allowed",
    "status": "error"
}
```

If you're getting the above message even though you're specifying the variable, you should make sure that you're sending the request correctly as an HTTP POST request.