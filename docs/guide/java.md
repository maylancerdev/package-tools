# Java Code:



Using the popular [Apache HttpComponents](https://hc.apache.org/) library:



```java
final NameValuePair[] data = {
    new BasicNameValuePair("account_number", "12345678910"),
    new BasicNameValuePair("bank_code", "421")
};
HttpClient httpClient = HttpClients.createMinimal();
HttpPost httpPost = new HttpPost("https://maylancer.org/api/nuban/api.php");
httpPost.setEntity(new UrlEncodedFormEntity(Arrays.asList(data)));
HttpResponse httpResponse = httpClient.execute(httpPost);

String responseString = EntityUtils.toString(httpResponse.getEntity());
JSONObject response = new JSONObject(responseString);

```