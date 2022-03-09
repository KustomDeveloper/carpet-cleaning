<?php
/*
Template Name: Home Template
*/
get_header(); ?>

<div id="home-banner" class="section-one-wrapper">
    <h1 class="home-title"><span class="main-title-expert">Experts in</span> Kitchen <br/> Remodeling <span class="main-title-location">in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></span></h1>
    <div class="phone-container">
        <div class="home-banner-phone">CALL NOW: 
            <!--PHONE NUMBER IS SET INSIDE WORDPRESS CUSTOMIZER-->
            <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><?php echo get_theme_mod('bus_info_phone'); ?></a>
        </div>
        <hr class="banner-phone-hr" />
    </div>
</div><!--.section-one-wrapper-->

<div class="featured-boxes">
    <div class="featured-text">
        <h2>What We Do</h2>
        <h3>Award Winning Service</h3>

        <p>Since 2017, We have connected home owners  with the best kitchen remodeling contractors in their local area.</p>

        <h3>Kitchen Remodeling & Bathroom Renovations Made Easy</h3>

        <p>Kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> & bathroom renovations can add major wow-factor to your home and improve your lifestyle. Whether you simply want a few minor updates or are looking for a contractor to perform a complete overhaul, we can help. Our partners are true professionals who can help make your dream project a reality.</p>

        <div class="mobile main-content-cta cta">
            <!--PHONE NUMBER IS SET INSIDE WORDPRESS CUSTOMIZER-->
            <h3>Call Us Now To Get a Quote</h3> <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><button>Call Now For Quote</button></a>
        </div>
    </div>
    <div class="ft-box box-one">
        <div class="img-hover-zoom"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/remodel.jpg"></div>
        <h2>Remodel</h2>
        <p>Professional design consultants will bring the showroom right to your home, measure your space, and guide you through product selections to meet your needs and budget.</p>
    </div>
    <div class="ft-box box-two">
        <div class="img-hover-zoom"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/cabinets.jpg"></div>
        <h2>Cabinets</h2> 
        <p>Whether you want to create storage in a tight space or add cabinets to a kitchen island, your options are limitless with custom cabinets.
        </p>  
    </div>
    <div class="ft-box box-three">
        <div class="img-hover-zoom"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/renovation.jpg"></div>
        <h2>Renovation</h2>
        <p>Creating or renovating a new kitchen is an exciting project, but even small installations can be a daunting task. Let's bring your vision to life so that you can quickly get the most important room in your home back to use. </p>
    </div>
</div>

<div class="main-content">
    <div class="content-left">
        <h2>Comprehensive Kitchen Remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> Services</h2>

        <p>Got a kitchen remodeling idea you’d like to bring to life? A professional contractor will listen closely to your goals and needs to ensure your project is everything you hope for. Transforming your whole space can be an easy process when you work with the right team. Choose a full expansion or overhaul if you need to move walls and cabinets to create the lavish open floor plan you’ve always wanted. With comprehensive kitchen remodeling, you can make the most out of the space you have and improve your room’s functionality, so cooking is more enjoyable and efficient. Our <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partner contractors can help you achieve the kitchen you’ve always wanted.</p>

        <div class="mobile main-content-cta cta">
            <!--PHONE NUMBER IS SET INSIDE WORDPRESS CUSTOMIZER-->
            <h3>Call Us Now To Get a Quote</h3> <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><button>Call Now For Quote</button></a>
        </div>

        <h2>Conservative Kitchen Remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> Services</h2>

        <p>If you’d simply like to update the look and feel of your existing space, without performing major construction, there are many basic updates to choose from.</p>
        <div class="mc-bullet">
            <img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/counters-icon.png" />
            <h2>Counters</h2>
            <p>Although countertops are generally handled alongside cabinet replacements or refacing, you can update them at any time. Granite, butcher block, marble, quartz, and concrete are all popular choices. You can also opt for laminate, which tends to be more affordable and can take on the look of your favorite materials.</p>
        </div>
        <div class="mc-bullet">
            <img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/reface-icon.png" />
            <h2>Refacing</h2>
            <p>Not sure if new cabinets are in your budget? Ask about affordable cabinet lines or refacing.</p>
        </div>
        <div class="mc-bullet">
            <img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/lighting-icon.png" />
            <h2>Lighting</h2>
            <p>Whether you’re a culinary genius or simply want to improve the warmth of your room, updating the lighting is sure to do the trick. Lots of newer eco-conscious options are available, so you can save on your electric bill too. </p>
        </div>
        <div class="mc-bullet">
            <img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/plumbing-icon.png" />
            <h2>Plumbing</h2>
            <p>Fresh fixtures can completely change the look of your space, but it’s also important to change them out regularly to ensure they’re in proper working order, especially if your home has hard water. </p>
        </div>
        <div class="mc-bullet">
            <img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/sinks-icon.png" />
            <h2>Sinks</h2>
            <p>Your sink is one of the most-used items in the entire room and older sinks can look worn out or even pose risks with leaks. Whether you want a sleek and modern stainless sink, rugged and durable cast iron, or versatile and trendy farmhouse sink, professional installation makes all the difference in the world when it comes to the look and longevity of your investment.</p>
        </div>
        <div class="mc-bullet">
            <img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/cab-icon.png" />
            <h2>New Cabinets</h2>
            <p>Update your cabinets in a style and finish of your choosing, increase your storage space, or add an island for an additional workspace with ease.</p>
        </div>

        <div class="mobile main-content-cta cta">
            <!--PHONE NUMBER IS SET INSIDE WORDPRESS CUSTOMIZER-->
            <h3>Call Us Now To Get a Quote</h3> <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><button>Call Now For Quote</button></a>
        </div>

        <h2>Bathroom Updates</h2>
        <p>Kitchen remodeling professionals are often experts when it comes to upgrading bathrooms too. We can connect you with an expert in your area who can handle everything from major overhauls to basic updates.</p>
        <ul>
            <li>Bathtubs and Showers</li>
            <li>Toilets</li>
            <li>Counters</li>
            <li>Cabinets</li>
            <li>Lighting</li>
            <li>Fixtures</li>
            <li>Sinks</li>
        </ul>
       
    </div>
    <div class="content-right">
        <div class="desktop sidebar-content">
           <?php get_template_part('template-part/part', 'sidebar'); ?>
        </div>

        <div class="below-sidebar-content">
            <h2>Kitchen Remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> Services Before You Sell Your Home</h2>

            <p>If you’re considering selling your home, one of the best spaces to update is your kitchen. Potential buyers absolutely delight in even minor changes, such as updated counters, cabinets, faucets, and appliances. However, it’s important to be especially mindful of costs when you’re doing updates with the hope of improving the market value of your home or getting it to move faster. You often won’t recoup the expenses of lavish or custom upgrades, and if your revamp makes your home more expensive than others in the neighborhood, it won’t move as fast. The good news is that when you work with professional kitchen remodeling contractors, they tend to have a keen eye for ROI. Be sure to let your contractor know why you’re doing updates, so you can work together to create a solid plan that meets your personal goals.</p>

            <h2>Hire a Kitchen Remodeling & Bathroom Renovation Expert</h2>
            <!--PHONE NUMBER IS SET INSIDE WORDPRESS CUSTOMIZER-->
            <p>No matter what the size and scope of your project is, our kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners are available to help. Contact us today at <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><?php echo get_theme_mod('bus_info_phone'); ?></a> to see how our kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners can help.</p>
        </div>
    </div>
</div>

<div class="main-content-cta cta">
    <!--PHONE NUMBER IS SET INSIDE WORDPRESS CUSTOMIZER-->
    <h3>Call Us Now To Get a Quote</h3> <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><button>Call Now For Quote</button></a>
</div>

<div id="services-content" class="our-services">
    <div class="services-text">
      <h2>Our Services</h2>
    </div>

    
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'tab_one')" id="defaultOpen">New Kitchen Builds</button>
        <button class="tablinks" onclick="openTab(event, 'tab_two')">Home Renovation</button>
        <button class="tablinks" onclick="openTab(event, 'tab_three')">Renovate Kitchen: Pro Tips</button>
        <button class="tablinks" onclick="openTab(event, 'tab_four')">Kitchen Interior Design</button>
        <button class="tablinks" onclick="openTab(event, 'tab_five')">Kitchen Refacing</button>
        <button class="tablinks" onclick="openTab(event, 'tab_six')">Kitchen Remodeling Contractors</button>
        <button class="tablinks" onclick="openTab(event, 'tab_seven')">Home & Bathroom Remodeling</button>
        <button class="tablinks" onclick="openTab(event, 'tab_eight')">Rock Wall Construction</button>
    </div>

    <div id="tab_one" class="tabcontent">
        <h3>New Kitchen Builds</h3>
        <p>Need to have a whole new kitchen built from scratch? Whether your project is part of a large home renovation or you’re recovering from a disaster, such as flood or fire, our kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners can help you create a new kitchen you can be proud of. Be involved as much or as little as you like- from the early design phase all the way through selecting just the right finishing touches for your new dream space or just let the experts do what they do best.</p>

        <h4>Design Your New Kitchen</h4>
        <p>Every new kitchen design will be a little different, as each household uses the space in a unique way. For many, it’s a hub of family activity or a place to assemble during get togethers. Others dream of a functional space fit for a gourmand, a basic and low-maintenance setup, or an eco-friendly design. You can add lavish touches such as stainless steel appliances, tile floors, granite countertops, and climate-controlled wine racks, or focus on functionality with dedicated work stations, a layout designed for ease-of-use, and storage for all your cookware. When you start with a new kitchen, the possibilities are endless.</p>

        <h4>Build Your Dream Kitchen Now</h4>
        <p>A new kitchen can take anywhere from a few weeks to a few months to construct, depending on your local codes and the items you choose. When you have an idea of what you want, work with an experienced kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> contractor to perfect your layout and choose the right brands and coordinating finishes. Be sure to take advantage of your builder’s knowledge and express what you’re trying to create or what problems you’ve had with kitchens in the past, so they can help you come up with solutions and ideas. To get started with your new kitchen design and build, contact our kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners today.</p>
    </div>

    <div id="tab_two" class="tabcontent">
        <h3>Home Renovation</h3>
        <p>Although they’re considered kitchen remodeling experts, our partners can tackle many different types of home renovation tasks. Whether you need to adapt what you have to create extra space, make the existing space more suitable for how you use it, or are considering a total overhaul of your interior, an experienced home renovation pro will walk you through the process from start to finish. This generally includes design, permits (when necessary), locating the right materials, and assembling a team of experts who can handle tasks that require advanced training and education, such as plumbing, electrical work, and drywall.</p>  

        <h4>Home Renovation: Beyond the Kitchen</h4>
        <p><b>Bathrooms:</b> Not everyone who specializes in home renovation is familiar with plumbing, which is one of the reasons why those who routinely work on kitchens are also generally good with bathrooms. Moreover, many of the other components are the same, such as countertops and cabinets, as well as electrical needs and lighting.</p>

        <p><b>Garages:</b> When you need to improve your garage’s storage situation, adding cabinets and shelving is an easy way to restore order. Although this type of home renovation is not as involved as other areas because you aren’t typically dealing with moving walls, plumbing, or electricity, professional installation and quality materials will add to the durability and longevity of your investment.</p>

        <p><b>Additions:</b> If you’re starting to feel like you’ve outgrown your home, an addition can make it possible to remain comfortable in your existing house.  Some of the most common additions include bedrooms, bathrooms, living rooms, dining rooms, and building extra space into kitchens.</p> 
    </div>

    <div id="tab_three" class="tabcontent">
        <h3>Renovate Kitchen: Pro Tips</h3>
        <p>If “renovate kitchen” is on your to-do list, we can help. Our partners understand what it’s like to renovate kitchen designs; full floor plans, cabinets, hardware, plumbing, electrical, and more. From the early planning through completion of your project, a good contractor will walk you through the process, but keep the following tips in mind as you go, so you have an idea of that’s ahead.</p>

        <p><b>Plan to spend somewhere between 10-15% of the value of your home if you’re doing an overhaul.</b> Most people who give their space a facelift by doing things such as repainting and refacing spend just over $10,000, but those who get more involved can easily spend more than $30,000.</p>

        <p><b>If you’re moving soon, focus on things that will give you more return on your investment.</b> This may not be the time to renovate kitchen floorplans or replace big ticket items unless yours are broken or seriously outdated. However, people do notice things like cabinets, counters, sinks, and appliances. In these cases, you’ll want to make sure that the changes you make won’t cause the price of your home to skyrocket over others in the neighborhood.</p>

        <p><b>If you’re staying, focus on what makes you happiest.</b> For most people, it’s the little upgrades that make them happiest in the long run. If you cook a lot, anything that makes your job easier, be it storage upgrades like lazy susans or having the counter adapted to your height, is the best place to invest.</p>

        <p><b>If you choose to renovate kitchen cabinets, expect this to take the lion’s share of your budget.</b> On average, people spend about 30% of their budgets on the cabinets, so when you begin gathering ideas and designing, start there, so you know what kind of budget you have left for other things. Generally speaking, you should also plan to set aside 20-25% of your budget for labor costs as well. Knowing these two figures in advance, and being mindful of them as you design, will make sure you wrap up your project on budget. For more information, please contact our kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners.</p>
    </div>

    <div id="tab_four" class="tabcontent">
        <h3>Kitchen Interior Design</h3>
        <p>There are many options when it comes to kitchen interior design, so narrowing down your choices when it comes to the layout should be your first step.

        <h4>Kitchen Interior Design Layouts</h4>
        <p>If your kitchen remodeling project involves moving walls and cabinets, you’ll likely be able to choose the footprint of the space.</p>

        <p><b>U-Shaped:</b> Most family-sized homes have a setup that looks like the letter “U.” This design makes it very easy for one person to move in the “triangle” from the refrigerator, to the stove, to the sink, and allows for distinct zones to be established in terms of prep, food storage, cookware storage, and dinnerware storage.</p>

        <p><b>G-Shaped:</b> While some people place an island amid their shape, the “G” adds a versatile inlet. Many use the extra space for counter-side seating, which can be helpful if you entertain or have children. The extra storage space below is a boon as well, particularly if you’re prone to buying extra gadgets.</p>

        <p><b>L-Shaped:</b> Oftentimes, the “L” shape is chosen to make a floorplan more open, particularly if it’s an eat-in kitchen. Kitchen interior design for the “L” kitchen often centers around maximizing storage, perhaps by adding full-length pantry cabinets or an island.</p>

        <p><b>Galley:</b> The galley style is like a hallway, with cabinets and appliances on two opposite sides. This is seen in many older homes and in places where space is at a premium. Storage is still a concern in this shape, as is lighting and having enough space between the two rows.</p>

        <p><b>One-Wall:</b> Kitchen interior design on one-wall spaces can be particularly challenging, simply because everything is placed in a tiny footprint, with no opportunity to create a triangle. On the bright side, one-wall setups usually only make an appearance in small apartments or homes suited for one or two people. In these cases, you can select smaller appliances and create dual-purpose work zones to make the most of the space.</p>
    </div>

    <div id="tab_five" class="tabcontent">
        <h3>Kitchen Refacing</h3>
        <p>Many people turn to kitchen refacing as an alternative to a full kitchen remodeling project. In this process, just the fronts of the cabinets are updated, offering the equivalent of a face lift for your space.</p>

        <h4>3 Types of Kitchen Refacing</h4>
        <p>
            <ol>
                <li><b>Replacement:</b> In most cases, the entire fronts of cabinets and drawers are totally replaced with new fronts.</li>
                <li><b>Laminate Coating:</b> Laminate can also be added to the fronts of cabinets to make the old look newer.</li>
                <li><b>Refinishing:</b> If you have solid wood, you may also opt to have the units sanded down and refinished or painted as a third type of kitchen refacing.</li>
            </ol>
        </p>

        <h4>Is Kitchen Refacing Right for You?</h4>
        <p>If your cabinets are broken, probably not. Kitchen refacing generally only deals with the aesthetic aspects, which means if you need to have repairs done because of cracks or non-working hardware, you may be better off replacing.</p>

        <p>If the interiors need updating, you may want to go new as well. A kitchen remodeling pro can refinish or coat the interiors of cabinets to make them look new again, but this adds to the overall expense. If you find yourself adding on lots of extra work with kitchen refacing, new might be a less expensive option.</p>

        <p>If your cabinets are totally functional and useful, but you want to update your look, kitchen refacing is a good choice. It can allow you to modernize the look of your space, change up your color scheme, and hide minor blemishes.</p>

        <p>If you want a quick and affordable update, yes. In many cases, kitchen refacing is far less expensive than new cabinets and can be done in weeks, start to finish. When replacements are done instead, especially custom options, just waiting on the pieces can take weeks or months. Contact us today at (915) 301-9551 to see how our kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners can help.</p>
    </div>

    <div id="tab_six" class="tabcontent">
        <h3>Kitchen Remodeling Contractors</h3>
        <p>Our goal is to make your next project as simple as possible by connecting you with the very best kitchen remodeling contractors in the area. Our partners are dedicated pros who understand the ins and outs of the process, the government regulations that must be taken into consideration, and how to make your space uniquely you- everything you hope it will be. If you’re comparing a few kitchen remodeling contractors, here are a few things you should look for.</p>

        <h4>Completeness in a Bid</h4>
        <p>You may work with several kitchen remodeling contractors or just one, but regardless, you should expect to see a written statement explaining all anticipated expenses. Look for itemized things, such as hardware and labor. If you talk to more than one professional, be sure you’re comparing bids line by line; apples to apples, and remember, the lowest bid may not be saving you money in the end if the job isn’t done right.</p>

        <h4>Face-to-Face Meeting</h4>
        <p>Local kitchen remodeling contractors should insist on meeting you before giving you any kind of estimate. We know you want to know costs up front, but every home is different and will have unique challenges. A good contractor will not only want to meet with you to discuss your needs, but will want to visit your home, take measurements, and check out the structure itself. Without this crucial step, you’re likely to wind up with surprise costs later.</p>

        <h4>Kitchen Remodeling Contractors Reputation</h4>
        <p>Before you sign any agreements, always look into the reputation of the professional you’re considering. Check places like the Better Business Bureau, Yelp, or even try Googling the company and representative’s name and phone number. Every company will have a flop now and again, but a pattern should emerge when you’re reading reviews. Contact us today at (915) 301-9551 to see how our kitchen remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners can help.</p>
    </div>

    <div id="tab_seven" class="tabcontent">
        <h3>Home & Bathroom Remodeling</h3>
        <p>Home remodeling is a serious undertaking and if you are interested in adding livable space to your home, renovating it for rental, or you need to install a handicapped bathroom to help take care of yourself or someone you love, our team is here to support you.</p>

        <h4>Bathroom Remodeling in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h4>
        <p>Bathroom remodeling can take your old, dated bathroom and make it an oasis inside your home. Bathrooms need to not only be beautiful and picturesque, but functional and efficient. Our bathroom remodeling in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> will help you walk that line and get the bathroom you’ve always wanted on your budget.</p>

        <h4>Handicapped Bathrooms in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h4>
        <p>Handicapped bathrooms help with daily tasks that keep you safe, independent, and healthy. There are special considerations, regulations, and rules to follow when designing handicapped bathrooms in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?>. Our team is well-versed on these requirements and can help you fit them into your home.</p>
    </div>

    <div id="tab_eight" class="tabcontent">
        <h3>Rock Wall Construction</h3>
        <p>Rock walls are a great addition to any home, and if you look around your neighborhood, you may notice that more and more people are getting them. Why is that? They are a beautiful addition to any yard and can serve functional purposes as well. When done correctly, rock wall construction lasts a long time and stands up against weather and wear for decades. With the right company, you don’t even need to worry about rock wall maintenance all that often.</p>

        <h4>Rock Wall Installation in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h4>
        <p>Rock wall installation in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> can improve the overall appearance of your yard and even increase functionality. Our team will meet with you to get a good idea about what you need from your rock wall, whether it will serve a functional purpose or it will be part of your curb appeal. From there, we can design, install, and even maintain your rock wall.</p>

        <h4>Rock Wall Repair in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h4>
        <p>Rock wall repair in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> requires experience not only with installation and construction techniques, but the best tools and skills to save your rock wall and keep its integrity. With the wrong company, you will have problems again. Our company can help with rock wall repair that lasts.</p>

        <h4>Retaining Wall Contractor in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h4>
        <p>Need a retaining wall contractor in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> or the surrounding area? Our team has the experience, tools, and professionalism to get the job done quickly. When it comes to retaining walls, you need someone who knows what they are doing: these walls have to be perfectly constructed to do their job properly. To find out more information about our retaining wall contracting team or to schedule a consultation, call us today.</p>

        <h4>Retaining Wall Construction in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h4>
        <p>Retaining wall construction in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> is more than just putting up a rock wall that is going to look pretty. It requires the skills and experience necessary to design and install a wall that will stand up against the ever changing weather conditions in Texas, the harsh soil conditions, and the needs of your family. Our team meets with you to design a retaining wall that is beautiful, functional, and strong.</p>

        <h4>Retaining Wall Installation in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h4>
        <p>Retaining walls do more than just look pretty in your yard: they serve a purpose. Retaining wall installation in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> requires knowledge about the best practices and materials that stand up to our climate, soils, and stressors. Our retaining wall contractors know just what to do and use.</p>

        <h4>Retaining Wall Repair in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h4>
        <p>If you need retaining wall repair in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?>, it is important to act quickly. Retaining walls have an important job to do when they keep your property safe from erosion. When there is a crack or a section that has collapsed, the force on the rest of the wall can cause complete failure. If you need one of the best retaining wall repair contractors in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?>, call us today.</p>
    </div>

</div>

<div class="gallery">
    <div class="inspiration-text">
      <h2>Inspiration Gallery</h2>
    </div>

    <div class="popup-gallery">
        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Designer-Kitchen.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Designer-Kitchen.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Kitchen.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Kitchen.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/kitchen-2021-08-28-22-39-30-utc.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/kitchen-2021-08-28-22-39-30-utc.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Kitchen-Modern.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Kitchen-Modern.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Kitchen-Remodel.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Kitchen-Remodel.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/kitchen-remodel-beautiful-kitchen-furniture-the-dr-2021-08-29-01-07-04-utc.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/kitchen-remodel-beautiful-kitchen-furniture-the-dr-2021-08-29-01-07-04-utc.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Kitchen-with-Modern-Bar.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Kitchen-with-Modern-Bar.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Counter-Kitchen.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Counter-Kitchen.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen-2.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen-2.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen-3.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen-3.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen-Counter.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen-Counter.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen-Light-Colors.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-Kitchen-Light-Colors.jpg" title="Kitchen Renovation"></a>

        <a class="image-link" href="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-White-Kitchen.jpg" title="Kitchen Renovation"><img class="lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/kitchen-gallery/Modern-White-Kitchen.jpg" title="Kitchen Renovation"></a>

    </div>
    
</div>

<div class="customer-reviews">
    <div class="section-title">
      <h2>Customer <span>Reviews</span></h2>
    </div>

    <?php echo do_shortcode('[WPCR_SHOW POSTID="ALL" NUM="5"]'); ?>

    <div class="mobile main-content-cta cta">
        <!--PHONE NUMBER IS SET INSIDE WORDPRESS CUSTOMIZER-->
        <h3>Call Us Now To Get a Quote</h3> <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><button>Call Now For Quote</button></a>
    </div>
</div>

<div class="mobile sidebar-content">
   <?php get_template_part('template-part/part', 'sidebar'); ?>
</div>


<div class="media-gallery">
    <div class="section-title">
      <h2>Our <span>Media</span></h2>
    </div>

    <div class="row video-row">
      <div class="col-md-3 vid1">
        <div itemprop="video" itemscope="" itemtype="http://schema.org/VideoObject">
          <meta itemprop="name" content="Kitchen Cabinets <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us Today <?php echo get_theme_mod('bus_info_phone'); ?>"><br>
          <iframe class="vid-col1" width="100%" height="auto" data-src="https://www.youtube.com/embed/<?php echo get_theme_mod('bus_info_video_id_1'); ?>?rel=0&amp;autoplay=1&mute=1" src="about:blank" frameborder="0" allowfullscreen=""></iframe><br>
          <link itemprop="embedURL" href="https://youtube.googleapis.com/v/<?php echo get_theme_mod('bus_info_video_id_1'); ?>">
          <link itemprop="thumbnailUrl" href="https://img.youtube.com/vi/<?php echo get_theme_mod('bus_info_video_id_1'); ?>/mqdefault.jpg">
          <meta itemprop="description" content="Kitchen Cabinets <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us Today <?php echo get_theme_mod('bus_info_phone'); ?>. No matter what the size and scope of your project is, our Kitchen Remodeling Pro <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners are available to help.">
          <meta itemprop="duration" content="PT0M55S">
          <meta itemprop="uploadDate" content="2018-05-03">
          <span class="short-video-title">Kitchen <span>Cabinets</span></span>
        </div>
      </div>  

      <div class="col-md-3 vid2">
        <div itemprop="video" itemscope="" itemtype="http://schema.org/VideoObject">
          <meta itemprop="name" content="Kitchen Remodel Cost <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us <?php echo get_theme_mod('bus_info_phone'); ?>"><br>
          <iframe class="vid-col2" width="100%" height="auto" data-src="https://www.youtube.com/embed/<?php echo get_theme_mod('bus_info_video_id_2'); ?>?rel=0&amp;autoplay=1&mute=1" src="about:blank" frameborder="0" allowfullscreen=""></iframe><br>
          <link itemprop="embedURL" href="https://youtube.googleapis.com/v/<?php echo get_theme_mod('bus_info_video_id_2'); ?>">
          <link itemprop="thumbnailUrl" href="https://img.youtube.com/vi/<?php echo get_theme_mod('bus_info_video_id_2'); ?>/mqdefault.jpg">
          <meta itemprop="description" content="Kitchen Remodel Cost <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us <?php echo get_theme_mod('bus_info_phone'); ?>. No matter what the size and scope of your project is, our Kitchen Remodeling Pro <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners are available to help.">
          <meta itemprop="duration" content="PT0M54S">
          <meta itemprop="uploadDate" content="2018-06-15">
          <span class="short-video-title">Kitchen Remodel <span>Cost</span></span>
        </div>
      </div>  

      <div class="col-md-3 vid3">
        <div itemprop="video" itemscope="" itemtype="http://schema.org/VideoObject">
          <meta itemprop="name" content="Kitchen Design Ideas <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Today <?php echo get_theme_mod('bus_info_phone'); ?>"><br>
          <iframe class="vid-col3" width="100%" height="auto" data-src="https://www.youtube.com/embed/<?php echo get_theme_mod('bus_info_video_id_3'); ?>?rel=0&amp;autoplay=1&mute=1" src="about:blank" frameborder="0" allowfullscreen=""></iframe><br>
          <link itemprop="embedURL" href="https://youtube.googleapis.com/v/<?php echo get_theme_mod('bus_info_video_id_3'); ?>">
          <link itemprop="thumbnailUrl" href="https://img.youtube.com/vi/<?php echo get_theme_mod('bus_info_video_id_3'); ?>/mqdefault.jpg">
          <meta itemprop="description" content="Kitchen Design Ideas <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Today <?php echo get_theme_mod('bus_info_phone'); ?>. No matter what the size and scope of your project is, our Kitchen Remodeling Pro <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners are available to help.">
          <meta itemprop="duration" content="PT0M55S">
          <meta itemprop="uploadDate" content="2018-06-05">
          <span class="short-video-title">Kitchen Design <span>Ideas</span></span>
        </div>
      </div>  

      <div class="col-md-3 vid4">
        <div itemprop="video" itemscope="" itemtype="http://schema.org/VideoObject">
          <meta itemprop="name" content="Home Remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us Today <?php echo get_theme_mod('bus_info_phone'); ?>"><br>
          <iframe class="vid-col4" width="100%" height="auto" data-src="https://www.youtube.com/embed/<?php echo get_theme_mod('bus_info_video_id_4'); ?>?rel=0&amp;autoplay=1&mute=1" src="about:blank" frameborder="0" allowfullscreen=""></iframe><br>
          <link itemprop="embedURL" href="https://youtube.googleapis.com/v/<?php echo get_theme_mod('bus_info_video_id_4'); ?>">
          <link itemprop="thumbnailUrl" href="https://img.youtube.com/vi/<?php echo get_theme_mod('bus_info_video_id_4'); ?>/mqdefault.jpg">
          <meta itemprop="description" content="Home Remodeling <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us Today <?php echo get_theme_mod('bus_info_phone'); ?>. No matter what the size and scope of your project is, our Kitchen Remodeling Pro <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners are available to help.">
          <meta itemprop="duration" content="PT0M55S">
          <meta itemprop="uploadDate" content="2018-06-29">
          <span class="short-video-title">Home <span>Remodeling</span></span>
        </div>
      </div>  
</div>
   
</div>

<?php get_footer(); ?>