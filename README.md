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
