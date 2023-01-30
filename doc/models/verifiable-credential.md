
# Verifiable Credential

## Structure

`VerifiableCredential`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `context` | `string[]` | Required | - | getContext(): array | setContext(array context): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `type` | `string[]` | Required | - | getType(): array | setType(array type): void |
| `issuer` | `string` | Required | - | getIssuer(): string | setIssuer(string issuer): void |
| `issuanceDate` | `string` | Required | - | getIssuanceDate(): string | setIssuanceDate(string issuanceDate): void |
| `credentialSubject` | [`CredentialSubject`](../../doc/models/credential-subject.md) | Required | - | getCredentialSubject(): CredentialSubject | setCredentialSubject(CredentialSubject credentialSubject): void |
| `proof` | [`Proof`](../../doc/models/proof.md) | Required | - | getProof(): Proof | setProof(Proof proof): void |

## Example (as JSON)

```json
{
  "@context": [
    "https://www.w3.org/2018/credentials/v1",
    "https://www.w3.org/2018/credentials/examples/v1"
  ],
  "id": "http://example.edu/credentials/1872",
  "type": [
    "VerifiableCredential",
    "DrivingLicenseCredential"
  ],
  "issuer": "Government Of India",
  "issuanceDate": "2010-01-01T19:23:24Z",
  "credentialSubject": {
    "id": "did:example:ebfeb1f712ebc6f1c276e12ec21",
    "License": {
      "type": "Driving License",
      "DLNumber": "UPABHISHEK16AX6539"
    }
  },
  "proof": {
    "type": "Ed25519Signature2018",
    "created": "2020-02-03T17:23:49Z",
    "jws": "eyJhbGciOiJFZERTQSIsImI2NCI6ZmFsc2UsImNyaXQiOlsiYjY0Il19..AUQ3AJ23WM5vMOWNtYKuqZBekRAOUibOMH9XuvOd39my1sO-X9R4QyAXLD2ospssLvIuwmQVhJa-F0xMOnkvBg",
    "proofPurpose": "assertionMethod",
    "verificationMethod": "https://example.edu/issuers/keys/1"
  }
}
```

