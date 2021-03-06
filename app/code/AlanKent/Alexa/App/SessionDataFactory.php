<?php
/**
 * Created by PhpStorm.
 * User: akent
 * Date: 6/2/2016
 * Time: 1:02 AM
 */

namespace AlanKent\Alexa\App;


/**
 * Factory to create default SessionDataInterface instances.
 */
class SessionDataFactory implements SessionDataFactoryInterface
{
    /**
     * @inheritdoc
     */
    public function create($sessionId)
    {
        return new SessionData($sessionId, null);
    }
}