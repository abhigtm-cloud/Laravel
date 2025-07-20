<?php

use Illuminate\Support\Facades\Route;

//route for the home page
Route::get('/home', function () {
    return view('welcome');
});

//route for the about us page
Route::get('/about', function () {
    return view('about.about',["name"=>"Abhinav"]);
});

//sample route for $slot and x-layout functionality check
Route::get('/smp', function () {
    return view('samplelayout',["name"=>"Abhinav"]);
});

Route::get("/cousins",function(){
$teas = [
   ["name"=>"Pankaj Gautam" ,"Age"=>38,"id"=>1 , "SocialMedia"=>"https://www.linkedin.com/in/pankaj-gautam-765973114/"],
   ["name"=>"Suraj Gautam" ,"Age"=>28,"id"=>2,"SocialMedia"=>"https://www.linkedin.com/in/suraj-gautam-8b2335229/"],
   ["name"=>"Karan Gautam" ,"Age"=>20,"id"=>3, "SocialMedia"=>"https://www.linkedin.com/in/abhinav-gautam-4068a5287/"],
   ["name"=>"Abhinav Gautam" ,"Age"=>19,"id"=>4 , "SocialMedia"=>"https://www.linkedin.com/in/abhinav-gautam-4068a5287/"],
    ];
    return view("cousins.index",["cousins"=>$teas]);
});

// This is your route definition in routes/web.php
Route::get("/cousins/{id}", function($id) {
    $teas = [
        
        [
            "name" => "Pankaj Gautam",
            "Age" => 38,
            "id" => 1,
            "SocialMedia" => "https://www.linkedin.com/in/pankaj-gautam-765973114/",
            "headline" => "Experienced IT Professional | Project Management & Cloud Solutions",
            "summary" => "Results-driven IT professional with over 15 years of experience in project management, system integration, and cloud infrastructure. Proven ability to lead complex projects from conception to completion, ensuring timely delivery and stakeholder satisfaction. Adept at optimizing IT operations and implementing innovative solutions to drive business growth. (Please verify and update from actual profile)",
            "experience" => [
                [
                    "title" => "Senior IT Manager (Placeholder)",
                    "company" => "Netgen IT Solutions.",
                   ],
               
            ],
            "education" => [
                [
                    "degree" => "Master of Business Administration (MBA) (Placeholder)",
                    "university" => "Your Business School",
                    "years" => "2010 – 2012"
                ],
                [
                    "degree" => "Bachelor of Technology, Computer Science (Placeholder)",
                    "university" => "Your Engineering College",
                    "years" => "2006 – 2010"
                ]
            ],
            "skills" => [
                "Project Management", "Cloud Computing", "AWS", "Azure", "IT Strategy", "System Integration", "Team Leadership", "Agile Methodologies", "Risk Management"
            ]
        ],
        // ID 2: Suraj Gautam (Placeholder Data - Please Verify/Update Manually)
        [
            "name" => "Suraj Gautam",
            "Age" => 28, // Placeholder Age
            "id" => 2,
            "SocialMedia" => "https://www.linkedin.com/in/suraj-gautam-8b2335229/",
            "headline" => "Software Engineer | Cloud & DevOps Enthusiast",
            "summary" => "Experienced Software Engineer with a strong background in developing robust and scalable applications. Proficient in various programming languages and frameworks, with a keen interest in cloud technologies (AWS, Azure) and DevOps practices. Passionate about problem-solving, continuous learning, and contributing to high-impact projects. (Please verify and update from actual profile)",
            "experience" => [
                [
                    "title" => "Software Engineer (Placeholder)",
                    "company" => "Global Tech Solutions",
                    "duration" => "Jan 2023 – Present",
                    "description" => "Developed and maintained backend services using Python and Django; Implemented CI/CD pipelines with Jenkins and Docker. (Please verify and update from actual profile)"
                ],
                [
                    "title" => "Junior Developer (Placeholder)",
                    "company" => "Innovate Web Labs",
                    "duration" => "Jul 2021 – Dec 2022",
                    "description" => "Assisted in front-end components development using React.js; Contributed to API integration and database management. (Please verify and update from actual profile)"
                ]
            ],
            "education" => [
                [
                    "degree" => "Bachelor of Technology, Computer Engineering (Placeholder)",
                    "university" => "Delhi Technological University",
                    "years" => "2017 – 2021"
                ]
            ],
            "skills" => [
                "Python", "Django", "AWS", "Docker", "Kubernetes", "CI/CD", "JavaScript", "React.js", "MySQL", "Git", "DevOps", "Cloud Computing"
            ]
        ],
        // ID 3: Karan Gautam (Using Abhinav's Placeholder Data - Please Verify/Update Manually)
        [
            "name" => "Karan Gautam",
            "Age" => 19, // Placeholder Age (same as Abhinav)
            "id" => 3,
            "SocialMedia" => "https://www.linkedin.com/in/abhinav-gautam-4068a5287/", // Same as Abhinav's link
            "headline" => "Aspiring Software Developer | Learning & Building (Placeholder)",
            "summary" => "Enthusiastic and quick-learning aspiring software developer with a strong foundation in programming fundamentals. Eager to gain practical experience in web development and contribute to innovative projects. Currently focusing on mastering modern frameworks and best practices. (Please verify and update from actual profile)",
            "experience" => [
                [
                    "title" => "Student Developer (Placeholder)",
                    "company" => "University Projects",
                    "duration" => "Sep 2023 – Present",
                    "description" => "Developed academic projects using Python and Java; Collaborated on team-based coding challenges. (Please verify and update from actual profile)"
                ]
            ],
            "education" => [
                [
                    "degree" => "Bachelor of Technology, Computer Science (Placeholder)",
                    "university" => "Your Current University Name",
                    "years" => "2023 – Present"
                ]
            ],
            "skills" => [
                "C++", "Python", "Java", "Data Structures", "Algorithms", "Web Development Basics", "HTML", "CSS", "JavaScript", "Git"
            ]
        ],
        // ID 4: Abhinav Gautam (Placeholder Data - Please Verify/Update Manually)
        [
            "name" => "Abhinav Gautam",
            "Age" => 19, // Placeholder Age
            "id" => 4,
            "SocialMedia" => "https://www.linkedin.com/in/abhinav-gautam-4068a5287/",
            "headline" => "Aspiring Software Developer | Learning & Building (Placeholder)",
            "summary" => "Enthusiastic and quick-learning aspiring software developer with a strong foundation in programming fundamentals. Eager to gain practical experience in web development and contribute to innovative projects. Currently focusing on mastering modern frameworks and best practices. (Please verify and update from actual profile)",
            "experience" => [
                [
                    "title" => "Student Developer (Placeholder)",
                    "company" => "University Projects",
                    "duration" => "Sep 2023 – Present",
                    "description" => "Developed academic projects using Python and Java; Collaborated on team-based coding challenges. (Please verify and update from actual profile)"
                ]
            ],
            "education" => [
                [
                    "degree" => "Bachelor of Technology, Computer Science (Placeholder)",
                    "university" => "Your Current University Name",
                    "years" => "2023 – Present"
                ]
            ],
            "skills" => [
                "C++", "Python", "Java", "Data Structures", "Algorithms", "Web Development Basics", "HTML", "CSS", "JavaScript", "Git"
            ]
        ],
    ];
    return view("cousins.index2", ["cousin" => $teas[$id - 1]]);
});