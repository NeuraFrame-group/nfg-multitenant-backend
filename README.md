# Backend SaaS Multi-Tenant — Architecture Portfolio

Ce dépôt présente une **architecture backend PHP orientée SaaS**, conçue pour des
plateformes **multi-tenant** avec un fort niveau d’**automatisation métier**, de
**sécurité** et de **scalabilité**.

Il s’agit d’une **version démonstrative et volontairement simplifiée**, extraite
d’un système réel en production.  
L’objectif est de montrer la **logique d’architecture**, les **choix techniques**
et le **raisonnement backend**, et non de fournir une application clé en main.

---

## Objectifs du dépôt

- Illustrer une **architecture backend claire et maintenable**
- Démontrer la **séparation des responsabilités** (API, sécurité, logique métier)
- Présenter une **stratégie multi-tenant** robuste
- Mettre en avant des mécanismes d’**automatisation** et de **sécurité**

---

## Fonctionnalités couvertes

- API REST stateless
- Authentification et autorisation via JWT
- Résolution et isolation multi-tenant
- Moteur d’automatisation (workflows, événements)
- Traitements asynchrones (cron / jobs)
- Sécurité applicative et audit des actions sensibles

---

## Stack technique principale

- **PHP 8.x** — backend, API, automatisation
- **MySQL** — structuration et modélisation des données
- **REST JSON API**
- **JWT (HS256)** — authentification
- **AES-256-GCM** — chiffrement des données sensibles

---

## Technologies complémentaires (contexte global)

- Java (services backend, logique applicative)
- JavaScript / TypeScript
- React (UI découplée, SPA)
- Intégration frontend ↔ API

---

## Organisation du projet

- `src/`  
  Exemples de structure backend, composants techniques et logique applicative.

- `docs/`  
  Documentation des choix d’architecture, principes de conception et stratégies
  techniques (multi-tenant, sécurité, automatisation).

- `examples/`  
  Scénarios métier simplifiés inspirés de cas réels (automatisation, paiements,
  sécurité, multi-tenant).

Pour une vue d’ensemble, commencer par :  
`docs/ARCHITECTURE.md`

---

## À propos de l’exécution

Le code est **volontairement non exécutable tel quel**.

Ce dépôt est **architecture-first** :
- montrer comment le système est pensé
- expliquer les responsabilités et les flux
- illustrer des patterns backend réels

Il ne s’agit pas d’un produit prêt à déployer.

---

## Projets privés et briques non exposées

Certaines composantes issues du système réel ne sont pas publiées
(pour des raisons de confidentialité ou de développement en cours), notamment :

- Infrastructure SMTP propriétaire (alternative à des solutions type Brevo)
- Automatisations conversationnelles avancées (chatbots, tests comportementaux)
- Orchestration WhatsApp / paiements / accès produits
- Agents IA pour prise de rendez-vous automatisée (fine-tuning LoRA)

Ces sujets peuvent être **détaillés et expliqués en entretien**.

---

## 📄 Note

Le code présenté vise à démontrer une **approche professionnelle du backend** :
architecture, sécurité, automatisation et cohérence fonctionnelle.

Le **code complet et exécutable** est disponible sur demande.
