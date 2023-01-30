
# Credential Subject

## Structure

`CredentialSubject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `license` | [`License`](../../doc/models/license.md) | Required | - | getLicense(): License | setLicense(License license): void |

## Example (as JSON)

```json
{
  "id": "did:example:ebfeb1f712ebc6f1c276e12ec21",
  "License": {
    "type": "Driving License",
    "DLNumber": "UPABHISHEK16AX6539"
  }
}
```

