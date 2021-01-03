<?php

namespace app\languages;

class GermanLang extends Lang {

    public function langAccueil()
    {
        $this->lang['home'] = 'Startseite';
        $this->lang['restoAsiat'] = 'asiatisch Restaurant in La Rochelle';
        $this->lang['hero'] = 'Entdecken Sie in einer gemütlichen und luxuriösen Atmosphäre die Aromen der 
        traditionellen chinesischen, japanischen und thailändischen Küche.';
        $this->lang['ourMenu'] = 'Unsere Speisen';
        $this->lang['specialties'] = 'Spezialitäten';
        $this->lang['discoverSpecialties'] = 'entdecken Sie unseren Spezialitäten';
        $this->lang['specialtiesSpeech'] = "Für uns ist es von grösster Wichtigkeit, Ihnen frishen Produkte mit 
        Schwerpunkt auf Qualität anzubieten. Wir kümmern uns gut um die Hygiene derjenigen, die mit Lebensmitteln
        in Kontakt kommen, und dies umso mehr in dieser Zeit.";

    }

    public function langEvents()
    {
        $this->lang['events'] = 'Veranstaltugen';
        $this->lang['organizeEvents'] = 'Organisieren Sie Ihre Veranstaltungen in unserem Restaurant';
        $this->lang['e1_nom'] = 'Geburtstagsparty';
        $this->lang['e1_italic'] = 'Wir werden es schaffen, damit Sie sich noch lange an Ihren Geburtstag erinnern';
        $this->lang['e1_1'] = 'Wähle, Sie ihren eigenen Kuchen';
        $this->lang['e1_2'] = 'Sketche, um Kinder zu unterhalten';
        $this->lang['e1_3'] = 'Spezifische Diäten werden berücksichtigt';
        $this->lang['e1_p'] = 'Unsere Mitarbeiter werden große um Sie kümmern und stellen Sie sicher, mangelt es nicht 
        an irgendetwas';
        $this->lang['e2_nom'] = 'Private Feiern';
        $this->lang['e2_italic'] = 'Sie werden von einem anspruchsvollen Interieur und einem warmen Lächeln von unserem
         wunderbaren Personal begrüßt.';
        $this->lang['e2_1'] = 'ein angenehmer und intimer Ort';
        $this->lang['e2_2'] = 'Kellner beobachten genau';
        $this->lang['e2_3'] = 'Essen, das jedermanns Freude sein wird';
        $this->lang['e2_p'] = 'Unser Restaurant steht Ihnen exklusiv zur Verfügung und ist somit der ideale Ort für 
        Veranstaltungen dieser Art.';
        $this->lang['e3_nom'] = 'Firmenfeiern';
        $this->lang['e3_italic'] = 'Unser Restaurant verspricht Ihnen ein angenehmes und einzigartiges Erlebnis mit
         Ihren Kollegen und Managern';

        $this->lang['e3_1'] = 'Überwachung Ihres Alkoholkonsums, so dass Sie Spaß haben, ohne darüber nachzudenken';
        $this->lang['e3_2'] = 'ursprüngliche Aktivitäten';
        $this->lang['e3_3'] = 'eine leichte Atmosphäre';
        $this->lang['e3_p'] = 'Der Druck verringert sich und Ihre Kollegen werden es Ihnen danken uns dafür 
        entschieden haben.';
    }

    public function langAbout()
    {
        $this->lang['about'] = 'Über Uns';
        $this->lang['promise'] = 'Was wir Ihnen versprechen';
        $this->lang['idealPlace'] = "La Rochelles La Pousse de Bambou ist der perfekte Ort für Sie, wenn Sie asiatische
         Küche genießen.";
        $this->lang['quality1'] = 'einwandfreie Produktqualität';
        $this->lang['quality2'] = 'größter Respekt für die Originalrezepte';
        $this->lang['quality3'] = 'beste Erfahrung';
        $this->lang['aboutSpeech'] = "Unser Restaurant bietet eine köstliche Speisekarte mit chinesischen, 
        thailändischen, vietnamesischen und japanischen Spezialitäten, die Sie mit Familie oder Freunden genießen 
        können, und das immer in einer warmen Atmosphäre! Um einen Tisch im La Pousse de Bambou zu reservieren, 
        kontaktieren Sie uns jetzt";
        $this->lang['chefs'] = 'Chefs';
        $this->lang['proChefs'] = 'Unsere professionellen Köche';
        $this->lang['chef1_name'] = 'Walter White';
        $this->lang['chef1_job'] = 'Chefkoch';
        $this->lang['chef2_name'] = 'Sarah Jhonson';
        $this->lang['chef2_job'] = 'Bäckerin';
        $this->lang['chef3_name'] = 'William Anderson';
        $this->lang['chef3_job'] = 'Koch';
        $this->lang['whyUs'] = 'Warum zu uns';
        $this->lang['whyChoosingUs'] = 'Warum unser Restaurant';
        $this->lang['why1_name'] = 'Qualität';
        $this->lang['why1_text'] = "Unsere Produkte sind frisch und werden unter lokalen Produzenten ausgewählt, 
        die sich für den Respekt vor der Umwelt einsetzen";
        $this->lang['why2_name'] = 'Überlieferung';
        $this->lang['why2_text'] = 'Wir haben umfangreiche Untersuchungen durchgeführt und sind in Kontakt mit 
        kulinarischen Experten in Asien zu bringen Sie die besten Gerichte';

        $this->lang['why3_name'] = "Erfahrung";
        $this->lang['why3_text'] = "Wir stellen ausschließlich Köche aus hervorragenden Lehrplänen und mit mindestens 
        5 Jahren Erfahrung auf diesem Gebiet ein";
    }

    public function langGallery()
    {
        $this->lang['gallery'] = 'Fotogallerie';
        $this->lang['pictures'] = 'Einige Bilder von unserem Restaurant';
    }

    public function langMenu()
    {
        $this->lang['menu'] = 'Speisen';
        $this->lang['discoverMenu'] = 'entdecken Sie unseren delicious Speisen';
        $this->lang['all'] = 'Alle';

    }

    public function langFooter()
    {
        $this->lang['phone'] = 'Telefon:';
        $this->lang['mail'] = 'E-Mail:';
        $this->lang['social'] = ['twitter', 'facebook', 'instagram', 'pinterest'];
        $this->lang['socials'] = 'Social';
        $this->lang['admin'] = 'Verwaltung';
        $this->lang['rights'] = ''; //purposefully left blank
    }

    public function langContact()
    {
        $this->lang['contact'] = 'Kontakt';
        $this->lang['contactUs'] = 'Kontaktieren Sie uns jetzt';
        $this->lang['address'] = 'Anschrift:';
        $this->lang['openingsTitle'] = 'Öffnungszeiten:';
        $this->lang['openingDays'] = 'Dienstag-Sonntag';
        $this->lang['openingTime1'] = 'von 11.45 bis 14.30 Uhr';
        $this->lang['openingTime2'] = 'von 19.30 bis 22 Uhr';
        $this->lang['openings'] = $this->lang['openingDays'] . ' '. $this->lang['openingTime1'] . ' und '.
            $this->lang['openingTime2'];
        $this->lang['closed'] = 'Geschlossen on Montag';
        $this->lang['name'] = 'Name: ';
        $this->lang['subject'] = 'Betreff: ';

        $this->lang['message'] = 'Nachricht:';
        $this->lang['sendMessage'] = 'Senden';
    }

    public function langBook() {
        $this->lang['book'] = 'Reservierung';
        $this->lang['bookHere'] = 'Kommen Sie vorbei';
        $this->lang['date'] = 'Datum:';
        $this->lang['time'] = 'Zeit:';
        $this->lang['peopleNb'] = 'Anzahl Gäste:';

        $this->lang['testimonials'] = 'Glückliche Gäste';
        $this->lang['customersThink'] = 'Was unsere Gäste über uns sagen';

        $this->lang['avis1_job'] = 'CEO & Vorsitzender';
        $this->lang['avis1_avis'] = 'Köstlich ! Ein Restaurant mit majestätischem Aussehen und aus gutem Grund 
        göttlich. Es ist eine echte Reise in asiatische Länder, bei der Sie typische Gerichte genießen können.
         Ich empfehle !';

        $this->lang['avis2_job'] = 'Designerin';
        $this->lang['avis2_avis'] = 'Ausgezeichnet!!! Die Produkte sind frisch und gut ergänzt. Die Auswahl ist groß 
        und der Service ist sehr effizient. Das Personal ist sehr professionell. Das Geld wert.';

        $this->lang['avis3_job'] = 'Ladenbesitzerin';
        $this->lang['avis3_avis'] = 'Das Restaurant ist sehr sauber und die Toiletten auch, es ist makellos. Desserts 
        enthalten frische Früchte, in Stücke geschnitten oder ganz, was ziemlich selten ist. Es ist eines der besten 
        Restaurants in der Gegend';

        $this->lang['avis4_job'] = 'Freiberufler';
        $this->lang['avis4_avis'] = 'Wir gingen in dieses asiatische Restaurant und wurden nicht enttäuscht. Wir 
        fühlten uns willkommen, die Speisekarte ist sehr abwechslungsreich. Das Personal ist freundlich und engagiert, 
        eine Reise wert und ohne Zweifel ein großer Gewinn in dieser Kategorie';

        $this->lang['avis5_job'] = 'Unternehmer';
        $this->lang['avis5_avis'] = 'Ein ausgezeichnetes asiatisches Restaurant. Toller Empfang, toller Service und 
        hochwertige Küche. Der Service ist einwandfrei, Ihre leeren Teller werden entfernt, um den Tisch nicht zu 
        überladen. Die Preise sind angemessen.';

    }


}

