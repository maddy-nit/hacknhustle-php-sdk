
# Public Key

## Structure

`PublicKey`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kty` | `string` | Required | - | getKty(): string | setKty(string kty): void |
| `crv` | `string` | Required | - | getCrv(): string | setCrv(string crv): void |
| `x` | `string` | Required | - | getX(): string | setX(string x): void |
| `y` | `string` | Required | - | getY(): string | setY(string y): void |

## Example (as JSON)

```json
{
  "kty": "EC",
  "crv": "secp256k1",
  "x": "pUC_rt64xNaJ8scD3LJnjU_CCN-Z1zQ2tVuIGsJzH4M",
  "y": "uTTM0Pf_3paUiQXM3eCp-WdAkfY17Xr87S3G6ZDHI7s"
}
```

