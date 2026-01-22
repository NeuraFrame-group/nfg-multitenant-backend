# Backend SaaS Multi-Tenant – Portfolio

Ce dépôt présente une **architecture backend PHP** conçue pour une plateforme SaaS multi-tenant orientée automatisation métier.

Le code présenté est une **version démonstrative**, extraite et simplifiée d’un système réel en production.

## Objectifs
- Montrer la conception backend
- Illustrer la séparation des responsabilités
- Démontrer la gestion multi-tenant, sécurité et automatisation

## Fonctionnalités clés
- API REST stateless
- Authentification JWT
- Isolation multi-tenant
- Moteur d’automatisation
- Jobs asynchrones (cron)
- Sécurité & audit

## Stack technique
- PHP 8.x
- MySQL
- JWT (HS256)
- AES-256-GCM
- REST JSON API

## Structure
Voir `/docs/ARCHITECTURE.md` pour une vue globale.

## Autres projets
- Pipelines IA (LoRA, agents)
- Automatisation marketing avancée
- Génération de contenus (IA)

> Code complet disponible sur demande.

## How to read this repository

- `src/` contient des exemples de structure backend et de composants techniques
- `docs/` décrit les choix d’architecture et les principes de conception
- `examples/` présente des scénarios métier simplifiés basés sur des cas réels

Le code est volontairement **non exécutable tel quel**.
L’objectif est de montrer la logique, l’architecture et le raisonnement backend,
pas de fournir une application prête à déployer.


## Ongoing & Private Projects

Certaines briques techniques ne sont pas exposées publiquement
(car en cours de développement ou confidentielles), notamment :

- Infrastructure SMTP propriétaire (alternative à des solutions type Brevo)
- Automatisations conversationnelles avancées (chatbots, tests comportementaux)
- Orchestration WhatsApp / paiements / accès produits
- Agents IA pour prise de rendez-vous automatisée (fine-tuning LoRA)

Ces sujets peuvent être détaillés en entretien.
