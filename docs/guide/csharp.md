# C# Code:


```c#
using System;
using System.Collections.Specialized;
using System.Net;

using (WebClient client = new WebClient())
{
  byte[] response = client.UploadValues("https://maylancer.org/api/nuban/api.php", new NameValueCollection() {
    { "account_number", "12345678910" },
    { "bank_code", "421" },
  });

  string result = System.Text.Encoding.UTF8.GetString(response);
}

```