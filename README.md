# Deprecated

Replaced by https://github.com/keboola/config-verify-encrypt.

# Keboola Config Encrypt Verify Demo Application

This app verifies, that encryption works properly. It accepts 2 parameters in the api call and compares them after docker-bundle decrypts them.

```
{
    "configData": {
        "parameters": {
            "plain": "value"
            "#encrypted": "KBC::Encrypted==ENCRYPTEDVALUE=="
        }
    }
}
```

The app will fail if decrypted value of `#encrypted` is not equal to `plain`.
