# Hightech Workshop - Déploiement automatisé

##  Objectif

Automatiser le déploiement de deux environnements (`production` et `staging`) avec :
- Nginx
- PHP
- MySQL
- Une page `test.php` affichant un message et le statut de la connexion MySQL

##  Structure

```
inventories/
  ├── production/hosts
  └── staging/hosts
playbooks/
  └── site.yml
roles/
  ├── nginx/
  ├── php/
  └── mysql/
```

##  Déploiement

### 1. Cloner le dépôt

```bash
git clone https://gitlab.com/VOTRE_UTILISATEUR/hightech-workshop.git
cd hightech-workshop
```

### 2. Lancer le playbook

Pour `production` :

```bash
ansible-playbook -i inventories/production/hosts playbooks/site.yml
```

Pour `staging` :

```bash
ansible-playbook -i inventories/staging/hosts playbooks/site.yml
```

##  Résultat attendu

Accéder à l’URL de chaque machine (VM) pour afficher la page `test.php` :
- Elle doit afficher un message (`Hello from Ansible!`)
- Et dire si la connexion MySQL a réussi

## 👨‍💻 Auteurs

- Tlemcen SANHAJI

