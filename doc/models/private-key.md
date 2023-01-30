
# Private Key

## Structure

`PrivateKey`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kty` | `string` | Required | - | getKty(): string | setKty(string kty): void |
| `crv` | `string` | Required | - | getCrv(): string | setCrv(string crv): void |
| `d` | `string` | Required | - | getD(): string | setD(string d): void |
| `x` | `string` | Required | - | getX(): string | setX(string x): void |
| `y` | `string` | Required | - | getY(): string | setY(string y): void |

## Example (as JSON)

```json
{
  "kty": "EC",
  "crv": "secp256k1",
  "d": "IXoW0oPYOuL8byFiiRlQMlYAhs-01e1iqiPLVqY9ua8",
  "x": "1GOsFpNCK9ELo-tim3YletR0Iw-nXvt43Yo39HdZueU",
  "y": "Ht_gMpAqXoWej7qRmuDEYF3xJBwIGo0H4YtDuHX4iNE"
}
```

