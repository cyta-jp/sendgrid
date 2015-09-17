# sendgrid

a tiny extension to delete mailaddress from bounce/invalid list on sendgrid.

## Usage

```
$client = CU\SendGridClient("<api_user>", "<api_key>");
$client->deleteFromBounceList($mail_address);
$client->deleteFromInvalidList($mail_address);
```
