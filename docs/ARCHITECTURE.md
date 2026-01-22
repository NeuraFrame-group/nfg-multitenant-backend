# Architecture Overview

Cette application suit une architecture backend stateless.

## Principes
- Séparation API / UI
- Multi-tenant isolation
- Sécurité par défaut
- Asynchrone via cron

## Flux
1. Requête API
2. Authentification JWT
3. Résolution du tenant
4. Exécution logique métier
5. Réponse JSON
