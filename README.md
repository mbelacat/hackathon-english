# hackathon-english

Le problème identifié
Le problème se situe à cheval sur le pôle administratif et le pôle des langues. En effet chaque année, l’ADEP reçoit de nombreuses inscriptions pour les cours du soir en anglais.
Les niveaux des apprenants étant très disparates, ceux-ci sont classés selon trois groupes croissants de niveau :
• Débutants
• Intermédiaires
• Perfectionnement
Ces groupes permettent à l’enseignante d’anglais d’adapter son contenu en fonction des apprenants et ainsi de leur proposer la formation la plus adaptée à leur profil.
Afin de pouvoir classer les personnes dans ces groupes, celles-ci doivent passer un test de positionnement. A l’heure actuelle ce test est un test papier de type questions-réponses que les personnes remplissent seules dans une salle (le test papier vous est fourni en annexe). Si ce système est fonctionnel, il pose plusieurs problèmes :
• Obligation pour la secrétaire d’imprimer les tests
• Consommation de papier
• Obligation pour la secrétaire de distribuer et collecter les tests mais aussi d’accompagner les personnes en salle et donc de quitter le secrétariat
• délai de correction des tests qui doivent être corrigés manuellement un à un par l’enseignante ce qui induit une charge de travail importante du côté enseignant et un délai d’attente du côté apprenant
Il vous est donc demandé de développer une application web qui permettra aux futurs apprenants du cours d’anglais de passer leurs tests de positionnement en ligne. Dans un premier temps au moins, les questions ne seront que de type QCM et ensuite éventuellement expression libre et phrase à trou, à vous de voir ce que vous pouvez gérer dans le temps imparti.

Spécifications techniques
- Front-end en HTML et CSS
- Back-end en PHP
- SGBD : MySQL
- Serveur de développement et de production : Apache2 - Protection contre les injections sql et les failles XSS
- Si usage d’un framework : Symfony 3 ou 4 (Symfony 4 conseillé)

Spécifications fonctionnelles
La version finale de votre logiciel permet la réalisation des opérations suivantes, classées par type d’utilisateur.
Pour le futur apprenant :
• accéder à l’application via une URL
• se connecter à son test personnel via son nom, son prénom et un code unique
• répondre à chaque question
• passer à la question suivante une fois une réponse proposée pour la question actuelle
• terminer le test et être déconnecté
Pour l’enseignant :
• accéder à l’application via une URL
• se connecter à son espace personnel d’administration du test
• ajouter/supprimer/modifier une question
• ajouter/supprimer/modifier une proposition de réponse
• définir la réponse correcte
• réaliser une correction automatisée du test
• accéder aux résultats des apprenants sous forme de tableau avec leur groupe de destination
• accéder à des informations détaillées sur les tests passés (date de création de la session de test, heure de passage, temps du test, nombre de bonnes réponses, nombres de mauvaises réponses)
Pour la secrétaire :
• accéder à l’application via une URL
• créer une session d’examen pour une personne sur la base de son nom, son prénom et son adresse mail
• générer automatiquement un code unique de session de test
• accéder aux résultats des apprenants sous forme de tableau avec leur groupe de destination
• accéder à un tableau récapitulatif des sessions de test créées où un code couleur indique celles qui ont été terminées par les apprenants et les tests toujours en attente de passage
• pouvoir annuler une session de test non-terminée.
