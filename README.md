# sendgrid

a tiny extension of official client to delete a mail address from bounce/invalid list on sendgrid.

## Install

```
$ composer require cu/sendgrid:dev-master
```

## Usage

```
$client = CU\SendGridClient("<api_user>", "<api_key>");
$client->deleteFromBounceList($mail_address);
$client->deleteFromInvalidList($mail_address);
```
