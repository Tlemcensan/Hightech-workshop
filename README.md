# Hightech Workshop

## Objectif
Déploiement automatisé d'une stack Nginx + PHP + MySQL avec Ansible sur deux environnements (staging et production).

## Arborescence
- inventory/ : fichiers d'inventaire Ansible
- playbooks/ : playbook principal
- roles/ : rôles pour nginx, php, mysql

## Déploiement
ansible-playbook -i inventory/production playbooks/site.yml
ansible-playbook -i inventory/staging playbooks/site.yml
