<?php

namespace app\languages;

class EnglishLang extends Lang {

    public function langAccueil()
    {
        $this->lang['home'] = 'Home';
        $this->lang['restoAsiat'] = 'asian restaurant in La Rochelle';
        $this->lang['hero'] = 'In a cozy and luxurious atmosphere, come and discover or rediscover the flavors of 
        Chinese, Japanese and Thai cuisines.';
        $this->lang['ourMenu'] = 'Our menu';
        $this->lang['specialties'] = 'Specials';
        $this->lang['discoverSpecialties'] = 'Discover our specials';
        $this->lang['specialtiesSpeech'] = "It is of utmost importance for us to feed you fresh products, as quality 
      is better than quantity. We take good care of those in contact with the food's hygiene, even more so 
      during those troubled times.";

    }

    public function langEvents()
    {
        $this->lang['events'] = 'Events';
        $this->lang['organizeEvents'] = 'Organize your events in our restaurant';
        $this->lang['e1_nom'] = 'Birthday parties';
        $this->lang['e1_italic'] = 'We\'ll make it so you remember your birthday for a long time';
        $this->lang['e1_1'] = 'choose your own cake';
        $this->lang['e1_2'] = 'skits to entertain children';
        $this->lang['e1_3'] = 'specific diets will be taken into account';
        $this->lang['e1_p'] = 'Our staff will take great care of you and will make sure you don\'t lack anything';
        $this->lang['e2_nom'] = 'Private parties';
        $this->lang['e2_italic'] = 'You will be greeted by a sophisticated interior and warm smiles from our wonderful 
        staff.';
        $this->lang['e2_1'] = 'a pleasant and intimate place';
        $this->lang['e2_2'] = 'waiters keeping a close watch';
        $this->lang['e2_3'] = 'food that will be everyone\'s delight';
        $this->lang['e2_p'] = 'Our restaurant is available exclusively for you, making it the ideal venue for events 
        of this kind.';
        $this->lang['e3_nom'] = 'Company parties';
        $this->lang['e3_italic'] = 'Our restaurant promises you a pleasant and unique experience with your colleagues
         and managers';
        $this->lang['e3_1'] = 'supervision of your alcohol consumption so that you can have fun without having to 
        think about it';
        $this->lang['e3_2'] = 'original activities';
        $this->lang['e3_3'] = 'a light atmosphere';
        $this->lang['e3_p'] = 'The pressure will decrease and your colleagues will thank you for choosing us.';
    }

    public function langAbout()
    {
        $this->lang['about'] = 'About';
        $this->lang['promise'] = 'What we can offer';
        $this->lang['idealPlace'] = "La Rochelle's La pousse de bambou is the perfect place for you if you enjoy asian cuisine.";
        $this->lang['quality1'] = 'flawless product quality';
        $this->lang['quality2'] = 'utmost respect for the original recipes';
        $this->lang['quality3'] = 'best experience';
        $this->lang['aboutSpeech'] = "Our restaurant offers a delicious menu consisting of Chinese, Thai, Vietnamese
         and Japanese specialties that you can enjoy with family or friends, and always in a warm atmosphere! 
         To reserve a table at La Pousse de Bambou, contact us now";
        $this->lang['chefs'] = 'Chefs';
        $this->lang['proChefs'] = 'Our professional chefs';
        $this->lang['chef1_name'] = 'Walter White';
        $this->lang['chef1_job'] = 'Head cook';
        $this->lang['chef2_name'] = 'Sarah Jhonson';
        $this->lang['chef2_job'] = 'Baker';
        $this->lang['chef3_name'] = 'William Anderson';
        $this->lang['chef3_job'] = 'Cook';
        $this->lang['whyUs'] = 'Why us';
        $this->lang['whyChoosingUs'] = 'Why our restaurant';
        $this->lang['why1_name'] = 'Quality';
        $this->lang['why1_text'] = "Our products are fresh and selected amongst local producers committed to the 
        respect of the environment";
        $this->lang['why2_name'] = 'Tradition';
        $this->lang['why2_text'] = 'We have done extensive research and are in contact with culinary experts in Asia 
        to bring you the best dishes';
        $this->lang['why3_name'] = "Experience";
        $this->lang['why3_text'] = "We solely hire cooks from outstanding curriculums and with a minimum of 5 years
         of previous experience in the field";
    }

    public function langGallery()
    {
        $this->lang['gallery'] = 'Gallery';
        $this->lang['pictures'] = 'Some pictures of our restaurant';
    }

    public function langMenu()
    {
        $this->lang['menu'] = 'Menu';
        $this->lang['discoverMenu'] = 'Discover our delicious menu';
        $this->lang['all'] = 'All';

    }

    public function langFooter()
    {
        $this->lang['phone'] = 'Phone:';
        $this->lang['mail'] = 'Mail:';
        $this->lang['social'] = ['twitter', 'facebook', 'instagram', 'pinterest'];
        $this->lang['socials'] = 'Social media';
        $this->lang['admin'] = 'Admin';
        $this->lang['rights'] = 'All Rights Reserved';
    }

    public function langContact()
    {
        $this->lang['contact'] = 'Contact';
        $this->lang['contactUs'] = 'Contact us';
        $this->lang['address'] = 'Address:';
        $this->lang['openingsTitle'] = 'Opening hours';
        $this->lang['openingDays'] = 'Tuesdays-Sundays';
        $this->lang['openingTime1'] = '11:45 AM - 2:30 PM';
        $this->lang['openingTime2'] = '7:30 PM - 10:00 PM';
        $this->lang['openings'] = $this->lang['openingDays'] . ' '. $this->lang['openingTime1'] . ' and '.
            $this->lang['openingTime2'];
        $this->lang['closed'] = 'Closed on Mondays';
        $this->lang['name'] = 'Name: ';
        $this->lang['subject'] = 'Subject: ';
        $this->lang['message'] = 'Message:';
        $this->lang['sendMessage'] = 'Send the message';
    }

    public function langBook() {
        $this->lang['book'] = 'Book a table';
        $this->lang['bookHere'] = 'Book a table in our restaurant';
        $this->lang['date'] = 'Date:';
        $this->lang['time'] = 'Time:';
        $this->lang['peopleNb'] = 'Number of people:';

        $this->lang['testimonials'] = 'Testimonials';
        $this->lang['customersThink'] = 'What our customers say about us';

        $this->lang['avis1_job'] = 'CEO & Chairman';
        $this->lang['avis1_avis'] = 'Delicious ! A restaurant with a majestic look, and for a good reason, it\'s divine. 
        It\'s a real trip to Asian countries during which you can savor typical dishes. I recommend !';

        $this->lang['avis2_job'] = 'Designer';
        $this->lang['avis2_avis'] = 'Excellent!!! The products are fresh and well complemented. The choice is wide 
        and the service is very efficient. The staff is very professional. Well worth the money.';

        $this->lang['avis3_job'] = 'Shop owner';
        $this->lang['avis3_avis'] = 'The restaurant is so very clean, and so are the toilets, it\'s flawless .
        Desserts have fresh fruits in them, cut in dices or whole, which is pretty rare.
        It\'s one of the best restaurants in the area';

        $this->lang['avis4_job'] = 'Freelancer';
        $this->lang['avis4_avis'] = 'We went to this asian restaurant and weren\'t disappointed. We felt welcome, 
        the menu is very varied. The staff is friendly and dedicated, worth the trip and are without a doubt 
        a great asset in this category';

        $this->lang['avis5_job'] = 'Entrepreneur';
        $this->lang['avis5_avis'] = 'An excellent Asian restaurant. Great service and high quality 
        cuisine. The service is impeccable, your empty plates removed so as not to clutter the table. The prices are 
        reasonable.';

    }


}

