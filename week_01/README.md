# Class Assignment 1 (see slides)

1. Fork this repo into your own GitHub repo.
1. Follow the Git Tutorial in the class slides, working within git_tutorial folder.
1. When you've completed the tutorial, push your changes back up to your GitHub repo.

# Homework Assignment 1

1. Watch one of the videos here: http://www.smashingmagazine.com/2012/12/22/talks-to-help-you-become-a-better-front-end-engineer-in-2013/
1. Write a paragraph below that explains to me what the video was about and what you got anything out of it. Be prepared to talk about it in Week 2.
1. Push this change back up to your repo (`git push origin master`).

## JavaScript Testing with Adam Hawkins
#### http://youtu.be/YdFQ29oK50M

I watched the JavaScript Testing video with Adam Hawkins. He spoke about many different unit and integration testing utilities and the possible idea of a "Holy Grail" testing suite. This would be a system where it would be browser independent, all tests written in JS, unit and integration support, and would test against all target browsers in CL.

He begins by addressing 5 of the major utilities to date: PhantomJS which is a headless browser capable of programmatically testing real content with a real DOM, CasperJS which is built on top of PhantomJS which adds some extra goodies like a DOM interaction API, JSTestDrive which is a utility built by Google that runs via command line and supports multiple browser types, ZombieJS which requires Node and is similar to CasperJS + PhantomJS, and Capybara which is written in Ruby and tests code on separate threads from the app code (which can be confusing).

After running through the various pros and cons of each of the above, he then explains the major issues: No unified framework for unit tests and integration tests, Dependency Hell (C++, python, node, java, or ruby), tests bound to test runner and not all methods CL friendly. He then proposes his idea which is to use a tool called QUnit in unison with jQuery to extend its testing functionality. You could essentially write your own testing library for use in your applications. Because jQuery will run in all environments, it’s the best choice to use. He continues on with explaining how jQuery tests their releases and new features via something called the TestSwarm. This allows jQuery to be tested against "every single God damn browser in the whole world." He then proposes that a tool would need to be written, similar to jQuery’s TestSwarm, which would allow the developer to run their tests against any browser ever.

He closes by urging the community to jump on the wagon with him and begin looking to a brighter JS dev future.