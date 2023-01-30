# Misc

```php
$miscController = $client->getMiscController();
```

## Class Name

`MiscController`

## Methods

* [Create Did](../../doc/controllers/misc.md#create-did)
* [Resolve Did](../../doc/controllers/misc.md#resolve-did)
* [Verify Sign](../../doc/controllers/misc.md#verify-sign)
* [Create Sign](../../doc/controllers/misc.md#create-sign)
* [Signature Parser](../../doc/controllers/misc.md#signature-parser)
* [Json Compare](../../doc/controllers/misc.md#json-compare)
* [QR Code](../../doc/controllers/misc.md#qr-code)


# Create Did

```php
function createDid(): void
```

## Response Type

`void`

## Example Usage

```php
$miscController->createDid();
```


# Resolve Did

```php
function resolveDid(string $did): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `did` | `string` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$did = 'did:ion:EiAtV0HmXmtvY-XXOIuK0Xbg8BpFA_r6fLsmiNVY_8UvQg';

$miscController->resolveDid($did);
```


# Verify Sign

```php
function verifySign(string $signature, VerifySignRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `signature` | `string` | Query, Required | - |
| `body` | [`VerifySignRequest`](../../doc/models/verify-sign-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$signature = 'eyJhbGciOiJFUzI1NksifQ.eyJNb2JpbGUgTnVtYmVyIjoiOTU0MDY2NzU3NSJ9.Y8UXYDPv77PYvyxpSkhFtyH7kHqrU1aNwlgpHHksoEBCpXHa3XSL8-WZHSRRO9X0DFjBfDTzNrMsSkXITV8tPA';
$body_publicKey_kty = 'EC';
$body_publicKey_crv = 'secp256k1';
$body_publicKey_x = 'pUC_rt64xNaJ8scD3LJnjU_CCN-Z1zQ2tVuIGsJzH4M';
$body_publicKey_y = 'uTTM0Pf_3paUiQXM3eCp-WdAkfY17Xr87S3G6ZDHI7s';
$body_publicKey = new Models\PublicKey(
    $body_publicKey_kty,
    $body_publicKey_crv,
    $body_publicKey_x,
    $body_publicKey_y
);
$body = new Models\VerifySignRequest(
    $body_publicKey
);

$miscController->verifySign($signature, $body);
```


# Create Sign

```php
function createSign(CreateSignRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateSignRequest`](../../doc/models/create-sign-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_message_mobileNumber = '9540667575';
$body_message = new Models\Message(
    $body_message_mobileNumber
);
$body_privateKey_kty = 'EC';
$body_privateKey_crv = 'secp256k1';
$body_privateKey_d = 'IXoW0oPYOuL8byFiiRlQMlYAhs-01e1iqiPLVqY9ua8';
$body_privateKey_x = '1GOsFpNCK9ELo-tim3YletR0Iw-nXvt43Yo39HdZueU';
$body_privateKey_y = 'Ht_gMpAqXoWej7qRmuDEYF3xJBwIGo0H4YtDuHX4iNE';
$body_privateKey = new Models\PrivateKey(
    $body_privateKey_kty,
    $body_privateKey_crv,
    $body_privateKey_d,
    $body_privateKey_x,
    $body_privateKey_y
);
$body = new Models\CreateSignRequest(
    $body_message,
    $body_privateKey
);

$miscController->createSign($body);
```


# Signature Parser

```php
function signatureParser(string $signature): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `signature` | `string` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$signature = 'eyJhbGciOiJFUzI1NksifQ.eyJAY29udGV4dCI6WyJodHRwczovL3d3dy53My5vcmcvMjAxOC9jcmVkZW50aWFscy92MSIsImh0dHBzOi8vd3d3LnczLm9yZy8yMDE4L2NyZWRlbnRpYWxzL2V4YW1wbGVzL3YxIl0sInR5cGUiOlsiVmVyaWZpYWJsZVByZXNlbnRhdGlvbiJdLCJ2ZXJpZmlhYmxlQ3JlZGVudGlhbCI6W3siQGNvbnRleHQiOlsiaHR0cHM6Ly93d3cudzMub3JnLzIwMTgvY3JlZGVudGlhbHMvdjEiLCJodHRwczovL3d3dy53My5vcmcvMjAxOC9jcmVkZW50aWFscy9leGFtcGxlcy92MSJdLCJpZCI6Imh0dHA6Ly9leGFtcGxlLmVkdS9jcmVkZW50aWFscy8xODcyIiwidHlwZSI6WyJWZXJpZmlhYmxlQ3JlZGVudGlhbCIsIkRyaXZpbmdMaWNlbnNlQ3JlZGVudGlhbCJdLCJpc3N1ZXIiOiJHb3Zlcm5tZW50IE9mIEluZGlhIiwiaXNzdWFuY2VEYXRlIjoiMjAxMC0wMS0wMVQxOToyMzoyNFoiLCJjcmVkZW50aWFsU3ViamVjdCI6eyJpZCI6ImRpZDpleGFtcGxlOmViZmViMWY3MTJlYmM2ZjFjMjc2ZTEyZWMyMSIsIkxpY2Vuc2UiOnsidHlwZSI6IkRyaXZpbmcgTGljZW5zZSIsIkRMTnVtYmVyIjoiVVBBQkhJU0hFSzE2QVg2NTM5In19LCJwcm9vZiI6eyJ0eXBlIjoiRWQyNTUxOVNpZ25hdHVyZTIwMTgiLCJjcmVhdGVkIjoiMjAyMC0wMi0wM1QxNzoyMzo0OVoiLCJqd3MiOiJleUpoYkdjaU9pSkZaRVJUUVNJc0ltSTJOQ0k2Wm1Gc2MyVXNJbU55YVhRaU9sc2lZalkwSWwxOS4uQVVRM0FKMjNXTTV2TU9XTnRZS3VxWkJla1JBT1VpYk9NSDlYdXZPZDM5bXkxc08tWDlSNFF5QVhMRDJvc3Bzc0x2SXV3bVFWaEphLUYweE1Pbmt2QmciLCJwcm9vZlB1cnBvc2UiOiJhc3NlcnRpb25NZXRob2QiLCJ2ZXJpZmljYXRpb25NZXRob2QiOiJodHRwczovL2V4YW1wbGUuZWR1L2lzc3VlcnMva2V5cy8xIn19XSwiaWQiOiJlYmM2ZjFjMiIsImhvbGRlciI6ImRpZDpleGFtcGxlOjc1NjRjYjljLTE2NWMtNDg1Ny1hODg3LWJmYzI0NjBhZjg2NyIsInByb29mIjp7InR5cGUiOiJFZDI1NTE5U2lnbmF0dXJlMjAxOCIsImNyZWF0ZWQiOiIyMDE5LTAyLTAzVDE3OjIzOjQ5WiIsImNoYWxsZW5nZSI6IjEyZWMyMSIsImp3cyI6ImV5SmhiR2NpT2lKRlpFUlRRU0lzSW1JMk5DSTZabUZzYzJVc0ltTnlhWFFpT2xzaVlqWTBJbDE5Li5aTzRMa3E4LWZPcnVFNG9VdnVNYXhlcEdYLXZMRDJnUHlOSXN6LWlBN1gwdHpDM185NmRqYUJZRHh4bDZ3RDF4S3J4MGg2ME5qSTlpOXBfTXhvWGtEUSIsInByb29mUHVycG9zZSI6ImF1dGhlbnRpY2F0aW9uIiwidmVyaWZpY2F0aW9uTWV0aG9kIjoiaHR0cHM6Ly9leGFtcGxlLmVkdS9pc3N1ZXJzL2tleXMvMSJ9fQ.OmnNiyn4eftFaC56eqevajBfmvaPt26GQKMOwFW0aed6Idb7ibdbgY_WRd8ygAZAgj83Onk5UEUpt4f4IHiRpA';

$miscController->signatureParser($signature);
```


# Json Compare

```php
function jsonCompare(JsonCompareRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`JsonCompareRequest`](../../doc/models/json-compare-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_jsonFirst_context = ['https://www.w3.org/2018/credentials/v1', 'https://www.w3.org/2018/credentials/examples/v1'];
$body_jsonFirst_type = ['VerifiablePresentation'];
$body_jsonFirst_verifiableCredential = [];

$body_jsonFirst_verifiableCredential_0_context = ['https://www.w3.org/2018/credentials/v1', 'https://www.w3.org/2018/credentials/examples/v1'];
$body_jsonFirst_verifiableCredential_0_id = 'http://example.edu/credentials/1872';
$body_jsonFirst_verifiableCredential_0_type = ['VerifiableCredential', 'DrivingLicenseCredential'];
$body_jsonFirst_verifiableCredential_0_issuer = 'Government Of India';
$body_jsonFirst_verifiableCredential_0_issuanceDate = '2010-01-01T19:23:24Z';
$body_jsonFirst_verifiableCredential_0_credentialSubject_id = 'did:example:ebfeb1f712ebc6f1c276e12ec21';
$body_jsonFirst_verifiableCredential_0_credentialSubject_license_type = 'Driving License';
$body_jsonFirst_verifiableCredential_0_credentialSubject_license_dLNumber = 'UPABHISHEK16AX6539';
$body_jsonFirst_verifiableCredential_0_credentialSubject_license = new Models\License(
    $body_jsonFirst_verifiableCredential_0_credentialSubject_license_type,
    $body_jsonFirst_verifiableCredential_0_credentialSubject_license_dLNumber
);
$body_jsonFirst_verifiableCredential_0_credentialSubject = new Models\CredentialSubject(
    $body_jsonFirst_verifiableCredential_0_credentialSubject_id,
    $body_jsonFirst_verifiableCredential_0_credentialSubject_license
);
$body_jsonFirst_verifiableCredential_0_proof_type = 'Ed25519Signature2018';
$body_jsonFirst_verifiableCredential_0_proof_created = '2020-02-03T17:23:49Z';
$body_jsonFirst_verifiableCredential_0_proof_jws = 'eyJhbGciOiJFZERTQSIsImI2NCI6ZmFsc2UsImNyaXQiOlsiYjY0Il19..AUQ3AJ23WM5vMOWNtYKuqZBekRAOUibOMH9XuvOd39my1sO-X9R4QyAXLD2ospssLvIuwmQVhJa-F0xMOnkvBg';
$body_jsonFirst_verifiableCredential_0_proof_proofPurpose = 'assertionMethod';
$body_jsonFirst_verifiableCredential_0_proof_verificationMethod = 'https://example.edu/issuers/keys/1';
$body_jsonFirst_verifiableCredential_0_proof = new Models\Proof(
    $body_jsonFirst_verifiableCredential_0_proof_type,
    $body_jsonFirst_verifiableCredential_0_proof_created,
    $body_jsonFirst_verifiableCredential_0_proof_jws,
    $body_jsonFirst_verifiableCredential_0_proof_proofPurpose,
    $body_jsonFirst_verifiableCredential_0_proof_verificationMethod
);
$body_jsonFirst_verifiableCredential[0] = new Models\VerifiableCredential(
    $body_jsonFirst_verifiableCredential_0_context,
    $body_jsonFirst_verifiableCredential_0_id,
    $body_jsonFirst_verifiableCredential_0_type,
    $body_jsonFirst_verifiableCredential_0_issuer,
    $body_jsonFirst_verifiableCredential_0_issuanceDate,
    $body_jsonFirst_verifiableCredential_0_credentialSubject,
    $body_jsonFirst_verifiableCredential_0_proof
);

$body_jsonFirst_id = 'ebc6f1c2';
$body_jsonFirst_holder = 'did:example:7564cb9c-165c-4857-a887-bfc2460af867';
$body_jsonFirst_proof_type = 'Ed25519Signature2018';
$body_jsonFirst_proof_created = '2019-02-03T17:23:49Z';
$body_jsonFirst_proof_challenge = '12ec21';
$body_jsonFirst_proof_jws = 'eyJhbGciOiJFZERTQSIsImI2NCI6ZmFsc2UsImNyaXQiOlsiYjY0Il19..ZO4Lkq8-fOruE4oUvuMaxepGX-vLD2gPyNIsz-iA7X0tzC3_96djaBYDxxl6wD1xKrx0h60NjI9i9p_MxoXkDQ';
$body_jsonFirst_proof_proofPurpose = 'authentication';
$body_jsonFirst_proof_verificationMethod = 'https://example.edu/issuers/keys/1';
$body_jsonFirst_proof = new Models\Proof1(
    $body_jsonFirst_proof_type,
    $body_jsonFirst_proof_created,
    $body_jsonFirst_proof_challenge,
    $body_jsonFirst_proof_jws,
    $body_jsonFirst_proof_proofPurpose,
    $body_jsonFirst_proof_verificationMethod
);
$body_jsonFirst = new Models\JsonFirst(
    $body_jsonFirst_context,
    $body_jsonFirst_type,
    $body_jsonFirst_verifiableCredential,
    $body_jsonFirst_id,
    $body_jsonFirst_holder,
    $body_jsonFirst_proof
);
$body_jsonSecond_context = ['https://www.w3.org/2018/credentials/v1', 'https://www.w3.org/2018/credentials/examples/v1'];
$body_jsonSecond_type = ['VerifiablePresentation'];
$body_jsonSecond_verifiableCredential = [];

$body_jsonSecond_verifiableCredential_0_context = ['https://www.w3.org/2018/credentials/v1', 'https://www.w3.org/2018/credentials/examples/v1'];
$body_jsonSecond_verifiableCredential_0_id = 'http://example.edu/credentials/1872';
$body_jsonSecond_verifiableCredential_0_type = ['VerifiableCredential', 'DrivingLicenseCredential'];
$body_jsonSecond_verifiableCredential_0_issuer = 'Government Of India';
$body_jsonSecond_verifiableCredential_0_issuanceDate = '2010-01-01T19:23:24Z';
$body_jsonSecond_verifiableCredential_0_credentialSubject_id = 'did:example:ebfeb1f712ebc6f1c276e12ec21';
$body_jsonSecond_verifiableCredential_0_credentialSubject_license_type = 'Driving License';
$body_jsonSecond_verifiableCredential_0_credentialSubject_license_dLNumber = 'UPABHISHEK16AX6539';
$body_jsonSecond_verifiableCredential_0_credentialSubject_license = new Models\License(
    $body_jsonSecond_verifiableCredential_0_credentialSubject_license_type,
    $body_jsonSecond_verifiableCredential_0_credentialSubject_license_dLNumber
);
$body_jsonSecond_verifiableCredential_0_credentialSubject = new Models\CredentialSubject(
    $body_jsonSecond_verifiableCredential_0_credentialSubject_id,
    $body_jsonSecond_verifiableCredential_0_credentialSubject_license
);
$body_jsonSecond_verifiableCredential_0_proof_type = 'Ed25519Signature2018';
$body_jsonSecond_verifiableCredential_0_proof_created = '2020-02-03T17:23:49Z';
$body_jsonSecond_verifiableCredential_0_proof_jws = 'eyJhbGciOiJFZERTQSIsImI2NCI6ZmFsc2UsImNyaXQiOlsiYjY0Il19..AUQ3AJ23WM5vMOWNtYKuqZBekRAOUibOMH9XuvOd39my1sO-X9R4QyAXLD2ospssLvIuwmQVhJa-F0xMOnkvBg';
$body_jsonSecond_verifiableCredential_0_proof_proofPurpose = 'assertionMethod';
$body_jsonSecond_verifiableCredential_0_proof_verificationMethod = 'https://example.edu/issuers/keys/1';
$body_jsonSecond_verifiableCredential_0_proof = new Models\Proof(
    $body_jsonSecond_verifiableCredential_0_proof_type,
    $body_jsonSecond_verifiableCredential_0_proof_created,
    $body_jsonSecond_verifiableCredential_0_proof_jws,
    $body_jsonSecond_verifiableCredential_0_proof_proofPurpose,
    $body_jsonSecond_verifiableCredential_0_proof_verificationMethod
);
$body_jsonSecond_verifiableCredential[0] = new Models\VerifiableCredential(
    $body_jsonSecond_verifiableCredential_0_context,
    $body_jsonSecond_verifiableCredential_0_id,
    $body_jsonSecond_verifiableCredential_0_type,
    $body_jsonSecond_verifiableCredential_0_issuer,
    $body_jsonSecond_verifiableCredential_0_issuanceDate,
    $body_jsonSecond_verifiableCredential_0_credentialSubject,
    $body_jsonSecond_verifiableCredential_0_proof
);

$body_jsonSecond_id = 'ebc6f1c2';
$body_jsonSecond_holder = 'did:example:7564cb9c-165c-4857-a887-bfc2460af867';
$body_jsonSecond_proof_type = 'Ed25519Signature2018';
$body_jsonSecond_proof_created = '2019-02-03T17:23:49Z';
$body_jsonSecond_proof_challenge = '12ec21';
$body_jsonSecond_proof_jws = 'eyJhbGciOiJFZERTQSIsImI2NCI6ZmFsc2UsImNyaXQiOlsiYjY0Il19..ZO4Lkq8-fOruE4oUvuMaxepGX-vLD2gPyNIsz-iA7X0tzC3_96djaBYDxxl6wD1xKrx0h60NjI9i9p_MxoXkDQ';
$body_jsonSecond_proof_proofPurpose = 'authentication';
$body_jsonSecond_proof_verificationMethod = 'https://example.edu/issuers/keys/1';
$body_jsonSecond_proof = new Models\Proof1(
    $body_jsonSecond_proof_type,
    $body_jsonSecond_proof_created,
    $body_jsonSecond_proof_challenge,
    $body_jsonSecond_proof_jws,
    $body_jsonSecond_proof_proofPurpose,
    $body_jsonSecond_proof_verificationMethod
);
$body_jsonSecond = new Models\JsonSecond(
    $body_jsonSecond_context,
    $body_jsonSecond_type,
    $body_jsonSecond_verifiableCredential,
    $body_jsonSecond_id,
    $body_jsonSecond_holder,
    $body_jsonSecond_proof
);
$body = new Models\JsonCompareRequest(
    $body_jsonFirst,
    $body_jsonSecond
);

$miscController->jsonCompare($body);
```


# QR Code

```php
function qRCode(QRCodeRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`QRCodeRequest`](../../doc/models/qr-code-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_name = 'Employee Name';
$body_age = 27;
$body_department = 'Police';
$body_id = 'aisuoiqu3234738jdhf100223';
$body = new Models\QRCodeRequest(
    $body_name,
    $body_age,
    $body_department,
    $body_id
);

$miscController->qRCode($body);
```

