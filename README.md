# Sonerezh

Code source pour une utilisation personnelle de Sonerezh.

- Copier/coller le code source sur votre serveur
- Configurer lighttpd de cette façon :
```
$HTTP["host"] =~ "sonerezh\.domaine\.extension$" {
        server.document-root = "/où/se/trouve/sonerezh/app/webroot"

        url.rewrite += (
                 "^/login" => "/index.php?$1",
                 "^/favicon.ico" => "$0",
                 "^/manifest.json" => "$0",
                 "^/(css|js|fonts|files|logo)/(.*)$" => "$0",
                 "/search\?(.*)$" => "/index.php?$1",
                 "/album\?(.*)$" => "/index.php?$1",
                 "/albums\?(.*)$" => "/index.php?$1",
                 "^/(.*)$" => "/index.php",
        )
}
```
