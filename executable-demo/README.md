# Démo backend exécutable

Ce dossier contient une **démo backend minimale et exécutable**.

L’objectif n’est **pas** de fournir un produit complet, mais de démontrer :
- la structure d’une API backend
- la mise en place d’une authentification (JWT)
- une logique multi-tenant simple
- l’utilisation de Docker pour l’exécution
- une approche propre et documentée du développement backend

Cette démo est **volontairement simple** et **indépendante**
de l’architecture principale présentée dans le reste du dépôt.

---

## Stack technique

- Python (FastAPI)
- PostgreSQL
- Docker / Docker Compose
- Authentification JWT

---

## Lancer la démo

### Prérequis
- Docker
- Docker Compose

### Démarrage

```bash
docker compose up --build

```

L’API sera accessible à l’adresse :

```
http://localhost:8000
```

La documentation interactive FastAPI est disponible ici :

```
http://localhost:8000/docs
```

---

## Endpoints disponibles

### Authentification

**POST `/auth/login`**

Retourne un token JWT de démonstration permettant
d’accéder aux endpoints protégés.

---

### Utilisateur connecté

**GET `/me`**

Retourne les informations de l’utilisateur authentifié
à partir du token JWT fourni.

Requête avec le header :

```
Authorization: Bearer <token>
```

---

### Accès multi-tenant

**GET `/tenants/{id}`**

Retourne les informations du tenant demandé.

Ce endpoint illustre une logique multi-tenant simple,
où l’accès dépend du contexte utilisateur extrait du JWT.

Requête avec le header :

```
Authorization: Bearer <token>
```

---

## À propos de cette démo

* Le token JWT est volontairement simplifié
* La base de données est incluse pour démontrer l’intégration,
  mais la logique métier reste minimale
* L’objectif est de fournir une **preuve d’exécution**,
  pas une application prête à être déployée en production

Pour une vision plus complète de l’architecture,
se référer à la documentation présente à la racine du dépôt.

---

## Note

Cette démo existe uniquement pour illustrer :

* la capacité à livrer un backend exécutable
* la structuration du code
* la compréhension des concepts backend essentiels

Le reste du dépôt se concentre sur l’architecture,
les choix techniques et les principes de conception.