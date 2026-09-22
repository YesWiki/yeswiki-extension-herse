# herse extension

Protects a whole wiki behind a single login and password, asked by the browser before
any page is shown.

It is a gate, not an account system: everyone shares the same credentials. YesWiki
accounts keep working behind it.

## Configuration

Through the interface:

1. Cog wheel, then Site management.
2. "conf. file" tab.
3. "Herse / Single entry password" section.
4. Enter a login and a password.
5. Save at the bottom of the page.

On the next load, the browser asks for those credentials.

The same values can be written straight into `wakka.config.php`:

| Key | Purpose |
|---|---|
| `herse_id` | the login being asked for |
| `herse_password` | the password being asked for |

Leaving either one empty turns the protection off.

## Word of caution

Authentication uses HTTP Basic, so the credentials travel in clear text when the wiki
is not served over HTTPS. Do not use this extension without a certificate.
