# Hightech Workshop - Déploiement automatisé

##  Objectif

Automatiser le déploiement de deux environnements (`production` et `staging`) avec :
- Nginx
- PHP
- MariaDB (compatible MySQL)
- Une page `test.php` affichant un message et le statut de la connexion MySQL

Chaque environnement utilise :
- sa propre base de données
- un utilisateur différent
- un mot de passe chiffré via **Ansible Vault**

---

##  Structure du projet

```
inventories/
  ├── production/hosts
  └── staging/hosts

group_vars/
  └── production/vault.yml (chiffré)
  └── staging/vault.yml (chiffré)

playbooks/
  └── site.yml
  roles/
  ├── nginx/
  ├── php/
  └── mysql/


```

---

##  Commandes de déploiement

### 1. Cloner le dépôt

```bash
git clone https://gitlab.com/VOTRE_UTILISATEUR/hightech-workshop.git
cd hightech-workshop
```

### 2. Déployer un environnement

#### ➤ Production :

```bash
ansible-playbook -i inventories/production/hosts playbooks/site.yml --ask-vault-pass -K
```

#### ➤ Staging :

```bash
ansible-playbook -i inventories/staging/hosts playbooks/site.yml --ask-vault-pass -K
```

---

##  Résultat attendu

Accéder à l’adresse IP de la VM dans le navigateur :

- Affichage d’un message `Hello from Ansible!`
- Indication : connexion MySQL réussie ou échouée

---

##  Auteurs

- SANHAJI Tlemcen – Numéro étudiant : *à compléter*

---

##  Sécurité

- Les mots de passe (base de données) sont stockés dans des fichiers `vault.yml` chiffrés avec Ansible Vault.
- Aucun mot de passe en clair n’est présent dans le dépôt.
