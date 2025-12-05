# Gestion de Clinique

## Description
Ce projet est un système de gestion pour une clinique, offrant la possibilité de gérer les **patients**, **médecins** et **départements**.  
Il inclut également un **tableau de bord dynamique**, des **statistiques interactives**, et supporte l’**internationalisation (i18n)**.  

Le projet est développé avec un backend PHP et intègre des fonctionnalités AJAX pour une navigation fluide.

---

## Fonctionnalités

### 1. Gestion des Entités
- CRUD complet pour :
  - **Patients** (ajout, modification, suppression, listing)
  - **Médecins**
  - **Départements**
- Gestion des relations entre entités :
  - Exemple : associer un médecin à un département
- Système complet de gestion des patients

### 2. Tableau de Bord & Statistiques
- Indicateurs clés : nombre total de médecins, spécialités, performance par département
- Graphiques interactifs avec **Chart.js**
- Rafraîchissement dynamique des données

### 3. Internationalisation (i18n)
- Support multilingue via fichiers dédiés (fr.php, en.php, es.php)
- Changement de langue depuis le tableau de bord

### 4. Documentation
- Scripts commentés pour faciliter la maintenance
- Ce fichier README décrit la structure et les prérequis du projet

### 5. Bonus (Améliorations facultatives)
- AJAX pour opérations sans rechargement de page
- Modals pour formulaires contextuels
- Graphiques avancés et interactions améliorées

---

## User Stories

| ID    | Description |
|-------|-------------|
| US01  | Gestion des patients (CRUD complet) |
| US02  | Gestion des départements |
| US03  | Gestion des médecins et association aux départements |
| US04  | Tableau de bord avec statistiques dynamiques |
| US05  | Internationalisation : changement de langue de l’interface |
| US06  | Fluidité de navigation avec AJAX |

---

## Prérequis
- largon comme outile d envirenement
- PHP >= 7.4
- Serveur web (Apache, Nginx)
- Base de données MySQL 
- Composer (si dépendances externes utilisées)
- Node.js / npm si Chart.js est géré via frontend

---

## Installation

1. **Cloner le dépôt**
```bash
git clone https://github.com/votre-utilisateur/php_brief.git
cd php_brief
