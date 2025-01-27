# MARKET_PLACE
Projet MarketPlace Workshop X75 2025

Nom de la MarketPlace ????

## Structure BDD
### Table Utilisateurs (users)
- ID (INT Auto Increment PRIMARY)
- Nom
- Prénom
- Email
- Téléphone
- Date de naissance
- Mot de passe
- Rôle : Acheteur (par défaut) / Vendeur / Admin
- Avatar (photo profil)
- Date de création de compte utilisateur
- Date de modification du compte
- Compte Actif ?

### Table Produits (products)
- ID
- VENDEUR_ID (id du vendeur)
- Titre = nom du produit
- Description
- Prix
- Image
- Catégorie (Category_ID)
- Statut du produit (En stock, Epuisé)
- Stock produit (quantité restante)
- Date de création du produit
- Date de MAJ du produit
- Produit Actif ?

### Table Catégories de produits 
- ID
- Nom de Catégorie
- Catégorie Active ?

### Table Commandes
- ID
- ID Acheteur
- Total de ma commande
- Date de création de ma commande
- Statut de commande (EN traitement, EN EXpédition...)


### Table Articles_commandés
- ID
- ID de la commande
- ID du produit
- Quantité
- Prix
- Vendeur ID

### Table Panier
- ID
- ID de l'utilisateur (= id du client)
- ID du produit
- Quantité
- Date d'ajout au panier

### Table messages
- ID
- ID de l'expéditeur
- ID du receveur
- Contenu du message
- Statut de lecture = 1 ou O
- Date de création du message

## Structure fichiers (Pages à créer)
- Création du compte
- Connexion
- Tableau de bord Client (Commandes, Panier, (adresses), Gestion du compte, avatar, mot de passe...)
- Tableau de bord Vendeur (Commandes, clients, gestion des produits (CRUD)...)
- Tableau de bord Admin (Création des catégories de produits, gestion des utilisateurs...)
- Page d'accueil (avec moteur de recherche et affichage en premier des derniers produits ajoutés (listing des produits))
- Page catégorie (listing des produits de la catégorie choisie)
- Page fiche produit (le produit en détail)
- Page mentions légales / RGPD Vie privée
- Page récapitulatif de la commande

## Navigation (Vue pour un client)
- Accueil
- Catégories (menu dropdown)
- Connexion, S'inscrire ou Mon compte (Profil, commandes, Déconnexion...)
- Panier (dropdown)
- 
  
