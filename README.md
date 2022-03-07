# phpstan exception demo

## Exception

```
Internal error: Internal error: Call to a member function getConfiguration() on null in file /data/phpstan-doctrine/src/DemoEntity.php                                                                
                                                                                                                                                                                                           
     Post the following stack trace to https://github.com/phpstan/phpstan/issues/new?template=Bug_report.md:                                                                                               
     #0 /data/phpstan-doctrine/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataFactory.php(144): Doctrine\ORM\Mapping\ClassMetadataFactory->completeIdGeneratorMapping()                         
     #1 /data/phpstan-doctrine/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/AbstractClassMetadataFactory.php(391): Doctrine\ORM\Mapping\ClassMetadataFactory->doLoadMetadata()             
     #2 /data/phpstan-doctrine/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/AbstractClassMetadataFactory.php(279):                                                                         
     Doctrine\Persistence\Mapping\AbstractClassMetadataFactory->loadMetadata()                                                                                                                             
     #3 /data/phpstan-doctrine/vendor/phpstan/phpstan-doctrine/src/Type/Doctrine/ObjectMetadataResolver.php(129): Doctrine\Persistence\Mapping\AbstractClassMetadataFactory->getMetadataFor()              
     #4 /data/phpstan-doctrine/vendor/phpstan/phpstan-doctrine/src/Rules/Doctrine/ORM/PropertiesExtension.php(25): PHPStan\Type\Doctrine\ObjectMetadataResolver->getClassMetadata()                        
     #5 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Rules/DeadCode/UnusedPrivatePropertyRule.php(103): PHPStan\Rules\Doctrine\ORM\PropertiesExtension->isAlwaysRead()            
     #6 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Analyser/FileAnalyser.php(102): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule->processNode()                              
     #7 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Analyser/NodeScopeResolver.php(549): PHPStan\Analyser\FileAnalyser->PHPStan\Analyser\{closure}()                             
     #8 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Analyser/NodeScopeResolver.php(302): PHPStan\Analyser\NodeScopeResolver->processStmtNode()                                   
     #9 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Analyser/NodeScopeResolver.php(514): PHPStan\Analyser\NodeScopeResolver->processStmtNodes()                                  
     #10 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Analyser/NodeScopeResolver.php(273): PHPStan\Analyser\NodeScopeResolver->processStmtNode()                                  
     #11 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Analyser/FileAnalyser.php(189): PHPStan\Analyser\NodeScopeResolver->processNodes()                                          
     #12 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Command/WorkerCommand.php(143): PHPStan\Analyser\FileAnalyser->analyseFile()                                                
     #13 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/evenement/evenement/src/Evenement/EventEmitterTrait.php(97): PHPStan\Command\WorkerCommand->PHPStan\Command\{closure}()  
     #14 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/clue/ndjson-react/src/Decoder.php(110): _PHPStan_156cb69be\Evenement\EventEmitter->emit()                                
     #15 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/evenement/evenement/src/Evenement/EventEmitterTrait.php(97): _PHPStan_156cb69be\Clue\React\NDJson\Decoder->handleData()  
     #16 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/react/stream/src/Util.php(62): _PHPStan_156cb69be\Evenement\EventEmitter->emit()                                         
     #17 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/evenement/evenement/src/Evenement/EventEmitterTrait.php(97):                                                             
     _PHPStan_156cb69be\React\Stream\Util::_PHPStan_156cb69be\React\Stream\{closure}()                                                                                                                     
     #18 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/react/stream/src/DuplexResourceStream.php(154): _PHPStan_156cb69be\Evenement\EventEmitter->emit()                        
     #19 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/react/event-loop/src/StreamSelectLoop.php(200): _PHPStan_156cb69be\React\Stream\DuplexResourceStream->handleData()       
     #20 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/react/event-loop/src/StreamSelectLoop.php(172):                                                                          
     _PHPStan_156cb69be\React\EventLoop\StreamSelectLoop->waitForStreamActivity()                                                                                                                          
     #21 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/src/Command/WorkerCommand.php(106): _PHPStan_156cb69be\React\EventLoop\StreamSelectLoop->run()                                  
     #22 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/symfony/console/Command/Command.php(259): PHPStan\Command\WorkerCommand->execute()                                       
     #23 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/symfony/console/Application.php(856): _PHPStan_156cb69be\Symfony\Component\Console\Command\Command->run()                
     #24 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/symfony/console/Application.php(259): _PHPStan_156cb69be\Symfony\Component\Console\Application->doRunCommand()           
     #25 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/vendor/symfony/console/Application.php(157): _PHPStan_156cb69be\Symfony\Component\Console\Application->doRun()                  
     #26 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/bin/phpstan(94): _PHPStan_156cb69be\Symfony\Component\Console\Application->run()                                                
     #27 phar:///data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan.phar/bin/phpstan(95): _PHPStan_156cb69be\{closure}()                                                                                 
     #28 /data/phpstan-doctrine/vendor/phpstan/phpstan/phpstan(8): require('...')                                                                                                                          
     #29 /data/phpstan-doctrine/vendor/bin/phpstan(117): include('...')                                                                                                                                    
     #30 {main}                                                                                                                                                                                            
     Child process error (exit code 1):
```

# Affected versions

phpstan-doctrine v1.2.2+

# How to reproduce

* Clone this repo
* ```composer upgrade```
* ```vendor/bin/phpstan analyse -v```

# What I found out

* Till 1.2.0 the phpstan-doctrine extention did any resolvings by itself
* Since 1.2.0 it works directly with doctrines code
  * 1.2.0 + 1.2.1 throwed another doctrine related exception
  * Since 1.2.2 it fails in Doctrine\ORM\Mapping\ClassMetadataFactory line 607 because $this->em is null
