<div style="font-family: Arial, sans-serif;">
    <h2>Bonjour {{ $subscriber->name }},</h2>
    <p>Merci de vous être inscrit à PowerUp Nutrition !</p>
    <p>Voici votre guide en pièce jointe ou via le lien ci-dessous :</p>
    <a href="{{ asset('assets/pdf/Nutrition2024.pdf') }}" style="display:inline-block;margin:16px 0;padding:12px 24px;background:#6c63ff;color:#fff;border-radius:8px;text-decoration:none;font-weight:bold;">Télécharger le guide</a>
    <p>Bonne lecture et à bientôt !<br>L'équipe PowerUp Nutrition</p>
</div>
